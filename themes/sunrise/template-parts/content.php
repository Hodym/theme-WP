<div class="page-header mb-4">
	<h1 class="h2 page-title font-weight-normal text-center text-muted"><?php the_title(); ?></h1>
</div>
<nav aria-label="breadcrumb">
	<ol class="breadcrumb mt-4">
		<li class="breadcrumb-item"><a href="#">Главная</a></li>
		<li class="breadcrumb-item"><a href="#">Блог</a></li>
		<li class="breadcrumb-item active" aria-current="page">Lorem ipsum dolor sit amet</li>
	</ol>
</nav>
<div class="page-content">
		<?php the_content(); ?>
</div>
<div class="page-footer">
	<div class="single-date lead font-italic"><?php the_date(); ?></div>
	<!-- ---- Rambler.Likes script start ------>
	<div class="rambler-share text-center"></div>
	<script>
		(function() {
			var init = function() {
				RamblerShare.init('.rambler-share', {
					"style": {
						"buttonBackground": "#555"
					},
					"utm": "utm_medium=social",
					"counters": false,
					"buttons": [
						"vkontakte",
						"facebook",
						"odnoklassniki",
						"twitter",
						"pinterest"
					]
				});
			};
			var script = document.createElement('script');
			script.onload = init;
			script.async = true;
			script.src = 'https://developers.rambler.ru/likes/v1/widget.js';
			document.head.appendChild(script);
		})();
	</script>
	<!-- ----   Rambler.Likes script end  ------>
</div>