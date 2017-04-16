<?php get_header(); ?>

<main class="archive">
    <div class="container skinny">
        <h1><?php the_archive_title(); ?></h1>

        <?php while(have_posts()): the_post(); ?>
            <article>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_field('kim_lesson_summary'); ?>
                <?php // To-do: Add support for external links ?>
                <a href="<?php the_permalink(); ?>">
                    <button type="button" class="btn btn-primary btn-xs">Read More</button>
                </a>
            </article>
        <?php endwhile?>
    </div>
</main>

<?php get_footer(); ?>
