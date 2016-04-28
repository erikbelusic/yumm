<article <?php post_class(); ?>>
        <div class="row">
            <div class="col-md-6 col-md-push-6">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('large', 'class=img-responsive'); ?>
                <?php endif; ?>
            </div>
            <div class="col-md-6 col-md-pull-6">
                <header>
                <h1 class="post-title"><?php the_title(); ?></h1>
                <h4 class="post-author">Recipe by: <?php the_author(); ?></h4>
                <?php if (yumm_has_recipe_categories()) : ?>
                    Categories: <?= yumm_list_recipe_categories(); ?>
                <?php endif; ?>
                </header>
                <section class="post-content">
                    <?php the_content(); ?>
                </section>
            </div>

        </div>
</article>