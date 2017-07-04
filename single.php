<?php get_header(); ?>

<main class="single">

    <article class="container content">
        <?php while(have_posts()): the_post(); ?>
        	<header>
            	<h1><?php the_title(); ?></h1>
            	<div class="post-details">
            		<span class="date"><?php the_date(); ?></span>
            		<span class="tags"><?php the_tags('', ', '); ?></span>
        		</div>
    		</header>
            <?php the_content(); ?>
        <?php endwhile?>
    </article>
</main>

<?php get_footer(); ?>