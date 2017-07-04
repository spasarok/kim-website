<?php get_header(); ?>

<main class="archive">
    <div class="container skinny">
        <?php if(is_category()): ?>
            <h1><?php single_cat_title(); ?></h1>
        <?php elseif(is_tag()): ?>
            <h1><?php single_tag_title(); ?></h1>
        <?php else: ?>
            <h1><?php the_archive_title(); ?></h1>
        <?php endif ?>

        <?php while(have_posts()): the_post(); ?>
            <article>
                <header>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="post-details">
                        <span class="date"><?php the_date(); ?></span>
                        <span class="tags"><?php the_tags('', ', '); ?></span>
                    </div>
                </header>
                <div class="summary">
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>">
                        <button type="button" class="btn btn-primary btn-md">Read More</button>
                    </a>
                </div>
                <?php // To-do: Add support for external links ?>
            </article>
        <?php endwhile?>
    </div>
</main>

<?php get_footer(); ?>
