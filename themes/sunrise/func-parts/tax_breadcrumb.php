<?php

function tax_breadcrumb()
{
    if (!is_front_page()) {
        echo '<li class=breadcrumb-item><a href="';
        echo get_option('home');
        echo '">Головна';
        echo '</a></li>';
        if (is_tax('taxnews') || is_single()) {
            echo '<li class=breadcrumb-item>';
            the_taxonomies(
                array(

                    /* translators: %s: Taxonomy label, %l: List of terms formatted as per $term_template. */
                    'template'      => '% %l',
                    'term_template' => '<a href="%1$s">%2$s</a>',

                )
            );
            
            echo '</li>';
            if (is_single()) {
                echo '<li class="breadcrumb-item active" aria-current="page">';
                the_title();
                echo '</li>';
            }
        }
    }
}
