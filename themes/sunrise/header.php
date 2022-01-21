<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sunrise
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<html class="h-100">
  <head>
  	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
  </head>
  <body class="bg-light h-100">
    <div class="site mx-auto d-flex flex-column h-100 w-100 position-relative">
      <header class="site-header">
        <div class="container position-relative">
          <div class="header-phone header-top shadow">+38 (068) 544 71 98 </div>
          <div class="header-search header-top shadow" id="header-search"><i class="fas fa-search"></i></div>
          <div class="header-btn header-top shadow" id="header-btn">Меню</div>
          <div class="search" id="search">
            <div class="search-close display-4 text-light position-absolute" id="search-close"><i class="fas fa-times"></i></div>
            <form class="search-form h-100 w-100 d-flex align-items-center justify-content-center mx-auto px-3">
              <input class="form-control mr-3 px-2 py-3" type="search" placeholder="Поиск по сайту">
              <input class="btn btn-theme" id="search-btn" type="submit" value="Найти">
            </form>
          </div>
		  <nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'sunrise' ); ?></button>
			<!-- <?php
			// wp_nav_menu(
			// 	array(
			// 		'theme_location' => 'menu-1',
			// 		'menu_id'        => 'primary-menu',
			// 	)
			// );
			?> -->
			</nav><!-- #site-navigation -->
          <nav class="header-menu" id="header-menu">
            <ul class="h-100 w-100 d-flex flex-column justify-content-center align-items-center">
              <li><a href="http://localhost:3000">Главная</a></li>
              <li><a href="about.html">О компании</a></li>
              <li><a href="objects.html">Наши объекты</a></li>
              <li><a href="news.html">Новости</a></li>
              <li><a href="contacts.html">Контакты</a></li>
            </ul>
          </nav>
        </div>
      </header>
      




