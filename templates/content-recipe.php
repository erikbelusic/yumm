<article <?php post_class(); ?>
    style="background:url(<?= (has_post_thumbnail()) ? wp_get_attachment_url(get_post_thumbnail_id($post->ID)) : "https://placeholdit.imgix.net/~text?txtsize=110&txt=coming+soon!&w=760&h=500&txttrack=0" ?>) center no-repeat;
        background-size:cover;">
    <div class="post-title-container">
        <a href="<?php the_permalink(); ?>"><h2 class="post-title"><?php the_title(); ?></h2></a>
    </div>
</article>