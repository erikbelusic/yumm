<article <?php post_class(); ?>>
    <a href="<?php the_permalink(); ?>"><h3 class="post-title"><?php the_title(); ?></h3></a>
    <span class="post-date"><?= get_the_date(); ?></span>
    <div class="post-excerpt"><?php the_content(); ?></div>
</article>