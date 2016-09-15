<?php get_header(); ?>
<div class="content-area">
	<main class="site-main tekla">
		<?php wp_nav_menu(array(
			'theme_location' => 'services-nav',
			'container_class' => 'services-nav',
			'menu_class' => 'services-nav__wrapper lcw'
		)); ?>
		<article class="lcw">
			<h2>3D моделирование Tekla Structures</h2>
			<p>Под 3D моделированием подразумевают процесс разработки трехмерного изображения объекта на основе его качественных и геометрических данных, а также конструкторской документации. Профессиональная разработка 3D моделей позволяет создать виртуальный прототип изделия при помощи программных систем для редактирования трехмерной графики.</p>
			<p>Данная технология позволяет рассмотреть модель продукта с любого угла, изменять освещение, размер и другие параметры. Кроме того, 3D визуализация помогает выявить все ошибки в расчетах, уязвимости изделия, а также протестировать его в режиме 3D сцены.</p>
			<p>Преимущества разработки трехмерных моделей в соответствии с конструкторской документацией:</p>
			<ol>
				<li>Предварительное создание модели позволяет выявить отдельные недостатки конструкторской единицы, а также определить технические ошибки, допущенные при разработке.</li>
				<li>Готовая 3D визуализация деталей помогает провести полноценную презентацию продукта, показать эффективность изделия и принцип его работы без расходов на реализацию физического прототипа.</li>
				<li>На основе 3D модели становится возможным точный расчет динамических характеристик изделия, модельный анализ и даже проведение программы испытаний. Это позволяет существенно сократить расходы на создание опытного образца.</li>
				<li>Разработка 3D моделей помогает оценить технологическую сложность монтажных работ. Кроме того, в большинстве случаев модель можно распечатать на 3D-принтере.</li>
			</ol>
		</article>
		<section class="pics">
			<div class="pics__wrapper lcw">
				<div class="pics__item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/services/tekla/1.jpg" alt="" class="pics__img">
					<div class="pics__mask"></div>				
				</div>
				<div class="pics__item pics__item--big">
					<img src="<?php echo get_template_directory_uri(); ?>/img/services/tekla/2.jpg" alt="" class="pics__img">
					<div class="pics__mask"></div>	
				</div>
				<div class="pics__item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/services/tekla/3.jpg" alt="" class="pics__img">
					<div class="pics__mask"></div>	
				</div>
			</div>
		</section>
		<article class="lcw">
			<h2>Профессиональное создание 3D моделей</h2>
			<p>Наша компания занимается визуализацией и трехмерным моделированием сборок, различных зданий. Реализация модели выполняется на основе технического задания заказчика или же готовой конструкторской документации.</p>
			<p>3D моделирование позволяет качественно оценить эффективность, принцип действия будущего здания, его технологичность и определить все недочеты конструкции. Именно поэтому данный процесс разработки должен быть выполнен исключительно профессионалами.</p>
			<p>Мы предлагаем разработку трехмерных моделей в программной системе Tekla Structures, позволяющей создавать детальные трехмерные конструктивные модели зданий и сооружений любой сложности. Модели Tekla могут быть использованы в процессе всего производственного цикла: от эскизов до изготовления, возведения и управления строительством. Опытные инженеры-конструкторы профессионально выполняет моделирование любых объектов независимо от технических параметров изделия. </p>
			<p>Позвоните по телефону <strong>+7 (495) 789-36-86</strong>, чтобы получить профессиональную консультацию от наших специалистов.</p>
		</article>
		<!--<section class="order">
			<div class="order__wrapper lcw">
				<h2 class="order__header">Заказать проект</h2>
				<div class="order__container">
					<div class="order__form">
						<div class="order__item">
							<input type="text" placeholder="Ваше имя:*" required>
						</div>
						<div class="order__item">
							<input type="tel" placeholder="Ваш телефон:*" required>
						</div>
						<div class="order__item">
							<input type="email" placeholder="Ваш e-mail:*" required>
						</div>
						<div class="order__item">
							<textarea placeholder="описание проекта:"></textarea>
						</div>
						<div class="order__item order__item--file">
							<label>
								<span class="order__file">Прикрепить файл</span>
								<input type="file" placeholder="">
							</label>							
						</div>
						<div class="order__item  order__item--submit">
							<input type="submit" value="Отправить">
						</div>
					</div>
				</div>
			</div>
		</section>-->
		<section class="order">
			<div class="order__wrapper lcw">
				<h2 class="order__header">Заказать проект</h2>
				<div class="order__container">
					<div class="order__form">
						<?php echo do_shortcode( '[contact-form-7 title="order"]' ); ?>
					</div>
				</div>
			</div>
		</section>		
	</main>
</div>
<?php get_footer(); ?>
