<article class="resume-item">

    <?php // Get resume item icon ?>
    <?php $icon = get_field('kim_resume_icon'); ?>
    <?php if($icon): ?>
        <?php if(get_field('kim_image_credit', $icon['ID'])): ?>
            <a href="<?php echo get_field('kim_image_credit', $icon['ID']); ?>" target="_blank" rel="nofollow">
                <img class="icon" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
            </a>
        <?php else: ?>
            <img class="icon" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
        <?php endif; ?>
    <?php endif; ?>

    <?php // Get year if this is the first resume item for that year ?>
    <?php if(get_field('kim_first_item')): ?>
        <time class="year"><?php echo DateTime::createFromFormat('F Y', get_field('kim_resume_start'))->format('Y'); ?></time>
    <?php endif; ?>

    <?php // Bullet for resume item ?>
    <div class="bullet"><div class="bullet-inner"></div></div>

    <?php // Resume item details ?>
    <div class="details">
        <div class="position"><?php the_title(); ?></div>
        <div class="employer">
            <?php if(get_field('kim_resume_employer')): ?>
                <?php the_field('kim_resume_employer'); ?>
            <?php endif; ?>
        </div>
        <time>
            <?php the_field('kim_resume_start'); ?>
            <?php if(get_field('kim_resume_present')): ?>
                <?php echo ' - Present'; ?>
            <?php elseif(get_field('kim_resume_end')): ?>
                <?php echo ' - '.get_field('kim_resume_end'); ?>
            <?php endif; ?>
        </time>
        <?php edit_post_link(); ?>
    </div>

</article>