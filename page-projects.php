<?php get_header(); ?>
<div class="content-area">
	<main class="site-main projects">
		<section class="project">
			<div class="project__wrapper lcw">
				<div class="project__item" data-featherlight-gallery data-featherlight-filter=".project__inner">
					<h2 class="project__header">Проектирование линий электропередач</h2>
					<div class="project__galery">
						<a href="<?php echo get_template_directory_uri(); ?>/img/projects/1/big/1.jpg" class="project__inner">
							<img src="<?php echo get_template_directory_uri(); ?>/img/projects/1/small/1.jpg" class="project__img">
						</a>
						<a href="<?php echo get_template_directory_uri(); ?>/img/projects/1/big/2.jpg" class="project__inner project__inner--big">
							<img src="<?php echo get_template_directory_uri(); ?>/img/projects/1/small/2.jpg" class="project__img">
						</a>
						<a href="<?php echo get_template_directory_uri(); ?>/img/projects/1/big/3.jpg" class="project__inner">
							<img src="<?php echo get_template_directory_uri(); ?>/img/projects/1/small/3.jpg" class="project__img">
						</a>						
					</div>
					<div class="project__textarea">
						<h3 class="project__title">Промышленное сооружение ЛЭП У-220-2т+14.</h3>
						<p class="project__text">Включает пояса жесткости, распорки и связи.</p>
						<p class="project__text">Общая площадь: 86,5 м2. Общий вес: 23,5 т. Марка стали: С245.</p>
					</div>
				</div>
				<div class="project__item" data-featherlight-gallery data-featherlight-filter=".project__inner">
					<h2 class="project__header">Проектирование торговых объектов</h2>
					<div class="project__galery">
						<a href="<?php echo get_template_directory_uri(); ?>/img/projects/2/big/1.jpg" class="project__inner">
							<img src="<?php echo get_template_directory_uri(); ?>/img/projects/2/small/1.jpg" class="project__img">
						</a>
						<a href="<?php echo get_template_directory_uri(); ?>/img/projects/2/big/2.jpg" class="project__inner project__inner--big">
							<img src="<?php echo get_template_directory_uri(); ?>/img/projects/2/small/2.jpg" class="project__img">
						</a>
						<a href="<?php echo get_template_directory_uri(); ?>/img/projects/2/big/3.jpg" class="project__inner">
							<img src="<?php echo get_template_directory_uri(); ?>/img/projects/2/small/3.jpg" class="project__img">
						</a>						
					</div>
					<div class="project__textarea">
						<h3 class="project__title">Торговое сооружение.</h3>
						<p class="project__text">Раздел КМД  включает отдельные несущие колонны, вертикальные и горизонтальные связи из труб и уголков.</p>
						<p class="project__text">Общая площадь:  2100м2. Общий вес: 87 т. Марка стали: С245 и 255.</p>
					</div>
				</div>
				<div class="project__item" data-featherlight-gallery data-featherlight-filter=".project__inner">
					<h2 class="project__header">Проектирование складов</h2>
					<div class="project__galery">
						<a href="<?php echo get_template_directory_uri(); ?>/img/projects/3/big/1.jpg" class="project__inner">
							<img src="<?php echo get_template_directory_uri(); ?>/img/projects/3/small/1.jpg" class="project__img">
						</a>
						<a href="<?php echo get_template_directory_uri(); ?>/img/projects/3/big/2.jpg" class="project__inner project__inner--big">
							<img src="<?php echo get_template_directory_uri(); ?>/img/projects/3/small/2.jpg" class="project__img">
						</a>
						<a href="<?php echo get_template_directory_uri(); ?>/img/projects/3/big/3.jpg" class="project__inner">
							<img src="<?php echo get_template_directory_uri(); ?>/img/projects/3/small/3.jpg" class="project__img">
						</a>						
					</div>
					<div class="project__textarea">
						<h3 class="project__title">Административно-складское сооружение.</h3>
						<p class="project__text">Раздел КМД  включает отдельные несущие колонны, вертикальные и горизонтальные связи из труб и уголков.</p>
						<p class="project__text">Общая площадь: 1100м2. Общий вес: 244,3 т. Марка стали: С245..</p>
					</div>
				</div>
				<div class="project__item" data-featherlight-gallery data-featherlight-filter=".project__inner">
					<h2 class="project__header">Проектирование узловых соединений</h2>
					<div class="project__galery">
						<a href="<?php echo get_template_directory_uri(); ?>/img/projects/4/big/1.jpg" class="project__inner project__inner--big">
							<img src="<?php echo get_template_directory_uri(); ?>/img/projects/4/small/1.jpg" class="project__img">
						</a>
						<a href="<?php echo get_template_directory_uri(); ?>/img/projects/4/big/2.jpg" class="project__inner">
							<img src="<?php echo get_template_directory_uri(); ?>/img/projects/4/small/2.jpg" class="project__img">
						</a>
						<a href="<?php echo get_template_directory_uri(); ?>/img/projects/4/big/3.jpg" class="project__inner project__inner--big">
							<img src="<?php echo get_template_directory_uri(); ?>/img/projects/4/small/3.jpg" class="project__img">
						</a>						
					</div>
					<div class="project__textarea">
						<h3 class="project__title">Узлы для демонстрационного стенда.</h3>
						<p class="project__text">Рабочая документация на изготовление образцов узлов из профильного проката для демонстрационного стенда.</p>
						<p class="project__text">Общий вес узлов: 149,1 кг. Марка стали: С245.</p>
					</div>
				</div>				
			</div>
		</section>
		<section class="callback">
			<div class="callback__wrapper lcw">
				<div class="callback__container">
					<h2 class="callback__header">Бесплатная оценка<br>Вашего проекта</h2>
					<div class="callback__form">
						<?php echo do_shortcode( '[contact-form-7 title="callback"]' ); ?>
					</div>
				</div>
			</div>
		</section>
	</main>
</div>
<?php get_footer(); ?>
