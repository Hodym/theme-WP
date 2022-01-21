<?php get_header(); ?>

<div class="site-content flex-grow-1 flex-shrink-0 mt-5 mt-md-0">
	<section class="page mt-3">
		<div class="container">

			<?php if (have_posts()) : ?>

				<header class="page-header mb-4">
					<h1 class="page-title h2 font-weight-normal text-center text-muted">
						<?php
						/* translators: %s: search query. */
						printf(esc_html__('Результат пошуку: %s', 'sunrise'), '<span>' . get_search_query() . '</span>');
						?>
					</h1>
				</header><!-- .page-header -->

			<?php

				while (have_posts()) :
					the_post();

					get_template_part('template-parts/content', 'search');

				endwhile; ?>

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

			<?php else :

				get_template_part('template-parts/content', 'none');

			endif; ?>

		</div>
	</section>
</div>

<?php get_footer(); ?>