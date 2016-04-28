<article <?php post_class(); ?>>
    <div class="close-button pull-right"><i class="glyphicon glyphicon-remove"></i></div>
    <a href="<?php the_permalink(); ?>"><h2 class="post-title"><?php the_title(); ?></h2></a>
    <span class="post-date"><span class="post-date"><?php get_template_part('templates/meta'); ?></span></span>
    <div class="post-excerpt">
        <div class="excerpt-measuring-wrapper">
            <?php the_excerpt(); ?>
        </div>
    </div>
    <div class="post-full-content">
        <div class="content-measuring-wrapper">
            <?php the_content(); ?>
        </div>
    </div>
</article>