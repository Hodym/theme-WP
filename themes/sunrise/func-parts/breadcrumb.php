<?php

function wmk_breadcrumb() {
    if (!is_front_page()) {
        echo '<li class=breadcrumb-item><a href="';
        echo get_option('home');
        echo '">Головна';
        echo '</a></li>';
        if (is_category() || is_single()) {
            echo '<li class=breadcrumb-item>';
            the_category(' ');
            echo '</li>';
            if (is_single()) {
                echo '<li class="breadcrumb-item active" aria-current="page">';
                the_title();
                echo '</li>';
            }
        }
    }
}