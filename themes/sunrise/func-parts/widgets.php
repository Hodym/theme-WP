<?php

function sunrise_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'sunrise' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'sunrise' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Адреса на сторінці Контакти', 'sunrise' ),
			'id'            => 'address-1',
			'description'   => esc_html__( 'Add widgets here.', 'sunrise' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="lead">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'sunrise_widgets_init' );