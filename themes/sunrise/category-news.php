<?php get_header(); ?>

<div class="site-content flex-grow-1 flex-shrink-0 mt-5 mt-md-0">
    <section class="page mt-3">
        <div class="container">
            <div class="page-header mb-5">
                <h1 class="h2 page-title font-weight-normal text-center text-muted"><?php single_cat_title(); ?></h1>
                <div class="page-subtitle lead text-center text-secondary"><?= category_description(); ?></div>
            </div>
            <div class="page-content">

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="card-title lead m-0"><a class="text-dark" href="<?= get_permalink(); ?>"><?php the_title(); ?></a></h3>
                        </div>
                        <div class="card-body bg-light pt-2 pb-0">
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="card-footer"><a class="btn btn-theme" href="<?= get_permalink(); ?>">Детальнiше</a></div>
                    </div>
                <?php endwhile;
                else :
                _e( 'Sorry, no posts were found.', 'textdomain' );
                endif; ?>

            </div>
            
            <div class="page-footer">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item"><a class="page-link text-info" href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li>
                        <li class="page-item"><a class="page-link text-info" href="#">1</a></li>
                        <li class="page-item"><a class="page-link text-info" href="#">2</a></li>
                        <li class="page-item"><a class="page-link text-info" href="#">3</a></li>
                        <li class="page-item"><a class="page-link text-info" href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>