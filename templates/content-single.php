<article <?php post_class(); ?>>
    <h1 class="post-title"><?php the_title(); ?></h1>
    <span class="post-date"><?php get_template_part('templates/meta'); ?></span>
    <div class="post-content"><?php the_content(); ?></div>
</article>