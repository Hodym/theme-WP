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

                    <?php
                    $args = array(
                        'post_type' => 'hotnews',
                    );

                    $query = new WP_Query($args);
                    while ($query->have_posts()) {
                        $query->the_post();
                        get_template_part('template-parts/content-taxnews', 'taxnews');
                    }
                    wp_reset_postdata();
                    ?>

                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>