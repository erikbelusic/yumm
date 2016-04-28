<article <?php post_class(); ?>>
    <div class="close-button pull-right"><i class="glyphicon glyphicon-remove"></i></div>
    <a href="<?php the_permalink(); ?>"><h2 class="post-title"><?php the_title(); ?></h2></a>
    <span class="post-date"><span class="post-date"><?php get_template_part('templates/meta'); ?></span></span>
    <div class="post-excerpt"><?php the_excerpt(); ?></div>
    <div class="post-full-content"><?php the_content(); ?></div>
</article>