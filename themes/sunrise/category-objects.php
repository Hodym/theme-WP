<?php get_header(); ?>

<div class="site-content flex-grow-1 flex-shrink-0 mt-5 mt-md-0">
    <section class="page mt-3">
        <div class="container">
            <div class="page-header mb-4">
                <h1 class="h2 page-title font-weight-normal text-center text-muted"><?php single_cat_title(); ?></h1>
                <div class="page-subtitle lead text-center text-secondary"><?= category_description(); ?></div>
            </div>
            <div class="page-content">
                <div class="row">

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                            <div class="col-lg-4">
                                <div class="card mb-5">
                                    <?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid' ) ); ?>
                                    <!-- <img class="card-img-top" src="assets/images/objects/objects.jpg" alt="Alt"> -->
                                    <div class="card-header">
                                        <h3 class="card-title lead text-center my-0"><?php the_title(); ?></h3>
                                    </div>
                                    <div class="card-body pb-0 bg-light">
                                    <?php the_excerpt(); ?>
                                    <p class="font-italic"><?php the_tags('Мiтки: '); ?></p>
                                    </div>
                                    <div class="card-footer text-center"><a class="btn btn-theme" href="<?= get_permalink(); ?>">Детальнiше</a></div>
                                </div>
                            </div>

                    <?php endwhile;
                    else :
                        _e('На жаль, публікацій не знайдено.', 'textdomain');
                    endif; ?>

                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>