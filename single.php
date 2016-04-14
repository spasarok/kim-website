<?php get_header(); ?>

<main class="single">
    <div class="container content">
        <?php while(have_posts()): the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        <?php endwhile?>
    </div>
</main>

<?php get_footer(); ?>