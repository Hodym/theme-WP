<div class="col-lg-4">
    <div class="card mb-5">
        <div class="card-header">
            <h3 class="card-title lead text-center my-0"><?php the_title(); ?></h3>
        </div>
        <div class="card-body pb-0 bg-light">
            <?php the_excerpt(); ?>
            <p class="font-italic"><?php the_tags('Мiтки: '); ?></p>
        </div>
        <div class="card-footer text-center"><a class="btn btn-theme" href="<?= get_permalink(); ?>">Детальнiше</a></div>
    </div>
</div>
