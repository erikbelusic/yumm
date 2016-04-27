<article <?php post_class(); ?>>
    <a href="<?php the_permalink(); ?>"><h3 class="post-title"><?php the_title(); ?></h3></a>
    <?php if (has_post_thumbnail()) : ?>
    <?php the_post_thumbnail('large', 'class=img-responsive'); ?>
    <?php else: ?>
        <img class="img-responsive" src="https://placeholdit.imgix.net/~text?txtsize=110&txt=coming+soon!&w=760&h=500&txttrack=0">
    <?php endif; ?>
</article>