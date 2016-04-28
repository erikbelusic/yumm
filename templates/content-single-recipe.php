<article <?php post_class(); ?>>
    <div class="recipe-image" style="background:url(<?= (has_post_thumbnail()) ? wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) : "https://placeholdit.imgix.net/~text?txtsize=110&txt=coming+soon!&w=760&h=500&txttrack=0" ?>) center no-repeat;
        background-size:cover;"><div class="post-title-container">
            <div class="post-title">
                <h1><?php the_title(); ?></h1>
                <h4 class="post-author">Recipe by: <?php the_author(); ?></h4>
                <?php if (yumm_has_recipe_categories()) : ?>
                    Categories: <?= yumm_list_recipe_categories(); ?>
                <?php endif; ?>
            </div>
        </div></div>




            <div class="">
                <header>


                </header>
                <section class="post-content">
                    <?php the_content(); ?>
                </section>
            </div>


</article>