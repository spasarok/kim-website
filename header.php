<!DOCTYPE html>
<html>

<head>
    <title><?php the_title(); ?></title>

    <!-- wp_head -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
    <div class="social">
        <?php if(get_option('kim_linkedin')): ?>
            <a href="<?php echo get_option('kim_linkedin'); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/social/linkedin.png">
            </a>
        <?php endif; ?>
        <?php if(get_option('kim_github')): ?>
            <a href="<?php echo get_option('kim_github'); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/social/github.png">
            </a>
        <?php endif; ?>
        <?php if(get_option('kim_twitter')): ?>
            <a href="<?php echo get_option('kim_twitter'); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/social/twitter.png">
            </a>
        <?php endif; ?>
    </div>
    <div class="container skinny">
        <h1>Kim Spasaro</h1>
    </div>
    <nav class="container skinny">
        <?php wp_nav_menu(array('theme_location' => 'header-menu' )); ?>
    </nav>
</header>