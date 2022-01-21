<form class="search-form h-100 w-100 d-flex align-items-center justify-content-center mx-auto px-3" method="get" action="<?= esc_url( home_url("/") ); ?>">
    <input class="form-control mr-3 px-2 py-3" type="search" name="s" value="<?php the_search_query(); ?>" placeholder="Пошук по сайту">
    <input class="btn btn-theme" id="search-btn" type="submit" value="Знайти">
</form>