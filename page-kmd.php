<?php get_header(); ?>
<div class="content-area">
	<main class="site-main kmd">
		<?php wp_nav_menu(array(
			'theme_location' => 'services-nav',
			'container_class' => 'services-nav',
			'menu_class' => 'services-nav__wrapper lcw'
		)); ?>
		<article class="lcw">
			<h2>Проектирование и разработка КМД:</h2>
			<p>Проектирование КМД – это разработка деталировочных чертежей металлоконструкций, которая производится на основе расчетов КМ. Наше конструкторское бюро берет на себя все виды проектирования, в том числе КМ и КМД. Наша задача – создание качественных чертежей для организованного и успешного выполнения работ.</p>
			<h3>Проектирование КМД содержит данные для реализации таких операций:</h3>
		</article>
		<section class="items items--kmd">
			<div class="items__wrapper lcw">
				<div class="items__item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/services/kmd/1.png" alt="" class="items__img">
					<div class="items__title">Разметка</div>
				</div>
				<div class="items__item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/services/kmd/2.png" alt="" class="items__img">
					<div class="items__title">Обработка</div>
				</div>
				<div class="items__item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/services/kmd/3.png" alt="" class="items__img">
					<div class="items__title">Сварка</div>
				</div>
				<div class="items__item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/services/kmd/4.png" alt="" class="items__img">
					<div class="items__title">Контроль</div>
				</div>
				<div class="items__item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/services/kmd/5.png" alt="" class="items__img">
					<div class="items__title">Монтаж</div>
				</div>				
			</div>
		</section>
		<article class="lcw">
			<p>Для блестящего результата мы обращаемся к 3D-моделированию. Создание трехмерной модели позволяет автоматически проверить здание на «адаптивность» и исключить возможные погрешности. В процессе выполнения проекта каждому элементу присваивается собственная маркировка, по которой конструкции разделяются для удобства транспортировки и монтажа на строительном участке. После разработки чертежей для каждого изделия формируются комплектная ведомость и монтажная схема.</p>
			<p>Использование передовых технологий в нашем деле позволяет предотвратить возникновение погрешностей в рабочей деталировочной документации. С нашей последующей технической поддержкой на этапе изготовления и монтажа у вашего будущего проекта не останется уязвимых сторон.</p>
			<p>Четко поставленные задачи и ориентировка на лучший результат – вот что позволяет нашим специалистам выполнят все работы точно в срок. Мы всегда готовы к тесному и плодотворному сотрудничеству с заказчиком для успешной реализации проекта.</p>
		</article>
		<section class="callback">
			<div class="callback__wrapper lcw">
				<div class="callback__container">
					<h2 class="callback__header">Бесплатная оценка<br>проекта КМД</h2>
					<form class="callback__form">
						<div class="callback__col callback__col--left">
							<div class="callback__item callback__item--name">
								<input type="text" placeholder="Ваше имя:*" required>
							</div>
							<div class="callback__item callback__item--tel">
								<input type="tel" placeholder="Ваш телефон:*" required>
							</div>
							<div class="callback__item callback__item--email">
								<input type="email" placeholder="Ваш e-mail:*" required>
							</div>
							<div class="callback__item callback__item--textarea">
								<textarea placeholder="Описание проекта"></textarea>
							</div>
						</div>
						<div class="callback__col callback__col--right">
							<div class="callback__item callback__item--file">
								<label>
									<input type="file">
									<span>Прикрепить файл</span>
								</label>
							</div>
							<div class="callback__item callback__item--submit">
								<input type="submit" value="Оценить КМД">
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>
	</main>
</div>
<?php get_footer(); ?>
