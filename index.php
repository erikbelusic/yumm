<?php get_header(); ?>
        <?php if (is_home()) : ?>
            <div>
                <?php get_template_part('templates/recipe-category-list'); ?>
            </div>
    <div class="home-item-heading">
        <h3>Latest Recipes and Blogs</h3>
    </div>
        <?php endif; ?>
        <?php if (is_tax('recipecategory')) : ?>
            <div>
                <h1 class="text-center taxonomy-title"><?= get_queried_object()->name; ?></h1>
            </div>
        <?php endif; ?>
        <?php if (!have_posts()) : ?>
            <div>
                <div class="alert alert-warning">
                    <?php _e('Sorry, no results were found.', 'yumm'); ?>
                </div>
            </div>
        <?php else : ?>
            <div>
            <?php while (have_posts()) : the_post(); ?>
                <div class="home-item">
                    <?php get_template_part('templates/content', get_post_type()); ?>
                </div>
            <?php endwhile; ?></div>
        <?php endif; ?>
<?php get_footer();