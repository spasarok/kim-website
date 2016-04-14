<?php get_header(); ?>

<?php $resume = new Resume(); ?>

<main class="resume">
    <div class="container skinny">
        <h1>Resume</h1>
        <section class="skills">
            <h2>Skills</h2>
            <?php echo $resume::kbd(get_option('kim_skills')); ?>
        </section>

        <section class="experience">
            <h2>Experience</h2>
            <?php echo $resume::kbd(get_option('kim_experience')); ?>
            <div class="timeline">
                <?php $experience = $resume::query_cat('experience'); ?>
                <?php while($experience->have_posts()): $experience->the_post(); ?>
                    <?php get_template_part('sections/resume', get_post_type()); ?>
                <?php endwhile; ?>
            </div>
        </section>

        <section class="experience">
            <h2>Leadership</h2>
            <div class="timeline">
                <?php $leadership = $resume::query_cat('leadership'); ?>
                <?php while($leadership->have_posts()): $leadership->the_post(); ?>
                    <?php get_template_part('sections/resume', get_post_type()); ?>
                <?php endwhile; ?>
            </div>
        </section>

        <section class="outreach">
            <h2>Outreach</h2>
            <?php echo $resume::kbd(get_option('kim_outreach')); ?>
            <div class="timeline">
                <?php $outreach = $resume::query_cat('outreach'); ?>
                <?php while($outreach->have_posts()): $outreach->the_post(); ?>
                    <?php get_template_part('sections/resume', get_post_type()); ?>
                <?php endwhile; ?>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>