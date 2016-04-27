<?php get_header(); ?>
<div class="row">
<?php if (!have_posts()) : ?>
    <div class="alert alert-warning">
        <?php _e('Sorry, no results were found.', 'yumm'); ?>
    </div>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
    <div class="col-xs-12 col-sm-6 col-md-4">
        <?php get_template_part('templates/content', get_post_type()); ?>
    </div>
<?php endwhile; ?>
</div>
<?php get_footer();