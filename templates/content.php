<article <?php post_class(); ?>>
    <a href="<?php the_permalink(); ?>"><h3 class="post-title"><?php the_title(); ?></h3></a>
    <span class="post-date"><span class="post-date"><?php get_template_part('templates/meta'); ?></span></span>
    <div class="post-excerpt"><?php the_excerpt(); ?></div>
</article>