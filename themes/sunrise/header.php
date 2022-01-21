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
            <?php get_search_form(); ?>
          </div>
          <?php if (has_nav_menu('header')): ?>
            <nav class="header-menu" id="header-menu">
            <?php
              wp_nav_menu(
                array(
                  'theme_location' => 'header',
                  'menu_class'     => 'h-100 w-100 d-flex flex-column justify-content-center align-items-center',
                  'container'      => false
                )
              );
            ?>
            </nav><!-- .header-menu -->
          <?php endif; ?>

        </div>
      </header>
      




