<?php get_header(); ?>

<div class="site-content flex-grow-1 flex-shrink-0 mt-5 mt-md-0">
	<section class="page mt-3">
		<div class="container">

			<?php while (have_posts()) : the_post();

				if ( in_category('objects') ) {

					get_template_part('template-parts/content-objects', get_post_type());

				} else {
					
					get_template_part('template-parts/content', get_post_type());
					
				}

			endwhile; ?>

		</div>
	</section>
</div>

<?php get_footer(); ?>