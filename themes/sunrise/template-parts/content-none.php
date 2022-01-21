	<header class="page-header mb-4">
		<h1 class="h2 page-title font-weight-normal text-center text-muted"><?php esc_html_e('Nothing Found', 'sunrise'); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if (is_home() && current_user_can('publish_posts')) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'sunrise'),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url(admin_url('post-new.php'))
			);

		elseif (is_search()) :
		?>

			<p><?php esc_html_e('Вибачте, але нічого не вiдповiдає вашим пошуковим термiнам. Будь ласка, спробуйте ще раз iз iншими ключовими словами.', 'sunrise'); ?></p>
		<?php
			get_search_form();

		else :
		?>

			<p><?php esc_html_e('Здається, ми не можемо знайти те, що ви шукаєте. Можливо, пошук допоможе.', 'sunrise'); ?></p>
		<?php
			get_search_form();

		endif;
		?>
	</div><!-- .page-content -->