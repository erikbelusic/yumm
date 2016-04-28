<article <?php post_class(); ?>>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <h1 class="post-title"><?php the_title(); ?></h1>
            <span class="post-date"><?php get_template_part('templates/meta'); ?></span>
            <div class="post-content"><?php the_content(); ?></div>
        </div>
    </div>
</article>