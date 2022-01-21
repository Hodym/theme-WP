<div class="card mb-4">
	<div class="card-header">
		<h3 class="card-title lead m-0"><a class="text-dark" href="<?= get_permalink(); ?>"><?php the_title(); ?></a></h3>
	</div>
	<div class="card-body bg-light pt-2 pb-0">
		<?php the_excerpt(); ?>
		<p class="font-italic"><?php the_tags('Мiтки: '); ?></p>
	</div>
	<div class="card-footer"><a class="btn btn-theme" href="<?= get_permalink(); ?>">Детальнiше</a></div>
</div>