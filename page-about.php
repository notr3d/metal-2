<?php get_header(); ?>
<div class="content-area">
	<main class="site-main about">
		<section class="main-slider">
			<div class="main-slider__item main-slider__item--left main-slider__item--dark main-slider__item--1">
				<div class="main-slider__wrapper lcw">
					<div class="main-slider__container">
						<div class="main-slider__title">Разработка чертежей КМД</div>
						<div class="main-slider__subtitle">У нас вы можете заказать рабочую документацию<br> стадии КМД</div>
						<a href="kmd" class="main-slider__price"></a>
					</div>
					<div class="main-slider__img"></div>
				</div>
			</div>
			<div class="main-slider__item main-slider__item--left main-slider__item--light main-slider__item--2">
				<div class="main-slider__wrapper lcw">
					<div class="main-slider__container">
						<div class="main-slider__title">3D моделирование</div>
						<div class="main-slider__subtitle">Разработка проекта КМД при помощи<br>программ трехмерного моделирования</div>
						<a href="modeling" class="main-slider__link">Перейти</a>
					</div>
					<div class="main-slider__img"></div>
				</div>
			</div>	
			<div class="main-slider__item main-slider__item--right main-slider__item--dark main-slider__item--3">
				<div class="main-slider__wrapper lcw">
					<div class="main-slider__container">
						<div class="main-slider__title">Проектирование объектов</div>
						<div class="main-slider__subtitle">Проектирование гражданских и промышленных<br>зданий любой сложности</div>
						<a href="manufacture" class="main-slider__link">Перейти</a>
					</div>
					<div class="main-slider__img"></div>
				</div>
			</div>	
			<div class="main-slider__item main-slider__item--left main-slider__item--light main-slider__item--4">
				<div class="main-slider__wrapper lcw">
					<div class="main-slider__container">
						<div class="main-slider__title">Проектирование кровли</div>
						<div class="main-slider__subtitle">Проектирование крыши и кровли<br>любой степени сложности</div>
						<a href="roof" class="main-slider__link">Перейти</a>
					</div>
					<div class="main-slider__img"></div>
				</div>
			</div>				
		</section>
		<section class="cols">
			<div class="cols__wrapper lcw">
				<div class="col col--big">
					<article>
						<h2>О компании</h2>
						<p>Компания АО «БиГ» – это комплексное проектирование зданий и сооружений любого типа и назначения. Наше главное преимущество - большой опыт проектирования самых разных объектов по всей России.</p>
						<p>Проектирование – один из самых важных и ответственных этапов в реализации любого проекта. На этапе проектирования производится разработка чертежей КМ и КМД, сбор и расчёт всех нагрузок, выбор и детальный расчёт конструктивных и инженерных решений. От качества выполнения проектных работ зависит правильное функционирование, надежность, удобство в эксплуатации  проектируемого здания. Поэтому проектные работы должны выполняться только опытным специалистам, имеющим достаточный практический опыт  в проектировании.</p>
						<p>Наша компания обладает обширным практическим опытом выполнения проектных работ различного назначения таких как:</p>
						<ul>
							<li><a href="services"><b>производственные здания, цеха;</b></a></li>
							<li><a href="services"><b>склады, ангары;</b></a></li>
							<li><a href="services"><b>торговые центры, гипермаркеты, магазины, рынки;</b></a></li>
							<li><a href="services"><b>объекты пищевой промышленности, холодильные камеры;</b></a></li>
							<li><a href="services"><b>объекты сельскохозяйственного назначения (птицефермы, здания для КРС);</b></a></li>
							<li><a href="services"><b>спортивные сооружения, фитнес-центры;</b></a></li>
							<li><a href="services"><b>автосалоны, автосервисы, автомойки, паркинги.</b></a></li>
						</ul>
						<!--<<p>Компания «BIG Construction» зарегистрирована  11 июля 2005 года. Основным направлением нашей деятельности является разработка строительной документации в рамках  проектов КМД.</p>
						<p>Наша компания имеет отличный опыт реализованных проектов в сфере как промышленного, так и гражданского назначения. </p>
						<p>Вся деятельность компании лицензирована, а также наши специалисты ежегодно проходят плановые курсы повышения квалификации и посещают различные строительные выставки за счет компании,  увеличивая при этом качество и скорость изготовления проектов.</p>
						blockquote>Мы высоко ценим вашу конфиденциальность и ваше время. Работая с нашей компанией вы приобретаете отличного партнера , который гарантирует Вам уверенность и стабильность  на долгие времена.</blockquote>
						<h3>Наши преимущества - это</h3>
						<ul>
							<li>высококвалифицированные специалисты с  хорошим опытом  в сфере проектирования</li>
							<li>современное программное обеспечение Tekla Structures, увеличивающее  качество и уменьшает срок выполнения проекта</li>
							<li>большой штат сотрудников (более 20)</li>
							<li>четкое соблюдение сроков выполнения проекта</li>
						</ul>-->
					</article>
				</div>
				<div class="col col--aside">
					<div class="aside-nav">
						<h2 class="aside-nav__header"><span>Мы предлагаем:</span></h2>
						<?php wp_nav_menu(array(
							'theme_location' => 'aside-nav',
							'container_class' => 'aside-nav__container',
							'menu_class' => 'aside-nav__wrapper'
						)); ?>
					</div>
				</div>
			</div>
		</section>		
		<section class="pics pics--5">
			<div class="pics__wrapper">
				<div class="pics__item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/pics/about/1.jpg" alt="" class="pics__img">
					<div class="pics__mask"></div>				
				</div>
				<div class="pics__item pics__item--big">
					<img src="<?php echo get_template_directory_uri(); ?>/img/pics/about/2.jpg" alt="" class="pics__img">
					<div class="pics__mask"></div>	
				</div>
				<div class="pics__item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/pics/about/3.jpg" alt="" class="pics__img">
					<div class="pics__mask"></div>	
				</div>
				<div class="pics__item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/pics/about/4.jpg" alt="" class="pics__img">
					<div class="pics__mask"></div>	
				</div>
				<div class="pics__item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/pics/about/5.jpg" alt="" class="pics__img">
					<div class="pics__mask"></div>	
				</div>
				
			</div>
		</section>
		<article class="lcw">
			<p>При проектировании зданий и сооружений мы используем только современное программное обеспечение, что ускоряет выпуск проектной документации, улучшает обмен информацией между проектными подразделениями, позволяет оперативно вносить изменения, возникшие при согласовании с заказчиком. 3D визуализация на этапе предпроектных разработок позволяет получить детальное понимание о внешнем облике будущего здания.</p>
			<p>Проектная компания АО «БиГ» - это надежный партнер в решении вопросов, связанных с комплексным проектированием зданий и сооружений.</p>
		</article>
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
		<section class="examples">
			<div class="examples__wrapper lcw">
				<h2 class="examples__heading">Примеры проектов:</h2>
				<div class="examples__container">
					<div class="examples__item">
						<div class="examples__inner">
							<img src="<?php echo get_template_directory_uri(); ?>/img/home/examples/1.jpg" alt="" class="examples__img">
							<div class="examples__mask">
								<h3 class="examples__header">Узлы для демонстрационного стенда</h3>
								<p class="examples__text">Рабочая документация на изготовление образцов узлов из профильного проката для демонстрационного стенда</p>
								<p class="examples__text">Общий вес узлов: <b>149,1 кг</b></p>
								<p class="examples__text">Марка стали: <b>С245</b></p>
							</div>
						</div>
					</div>
					<div class="examples__item">
						<div class="examples__inner">
							<img src="<?php echo get_template_directory_uri(); ?>/img/home/examples/2.jpg" alt="" class="examples__img">
							<div class="examples__mask">
								<h3 class="examples__header">Узлы для демонстрационного стенда</h3>
								<p class="examples__text">Рабочая документация на изготовление образцов узлов из профильного проката для демонстрационного стенда</p>
								<p class="examples__text">Общий вес узлов: <b>149,1 кг</b></p>
								<p class="examples__text">Марка стали: <b>С245</b></p>
							</div>
						</div>
					</div>
					<div class="examples__item">
						<div class="examples__inner">
							<img src="<?php echo get_template_directory_uri(); ?>/img/home/examples/3.jpg" alt="" class="examples__img">
							<div class="examples__mask">
								<h3 class="examples__header">Узлы для демонстрационного стенда</h3>
								<p class="examples__text">Рабочая документация на изготовление образцов узлов из профильного проката для демонстрационного стенда</p>
								<p class="examples__text">Общий вес узлов: <b>149,1 кг</b></p>
								<p class="examples__text">Марка стали: <b>С245</b></p>
							</div>
						</div>
					</div>
					<div class="examples__item">
						<div class="examples__inner">
							<img src="<?php echo get_template_directory_uri(); ?>/img/home/examples/4.jpg" alt="" class="examples__img">
							<div class="examples__mask">
								<h3 class="examples__header">Торговое сооружение</h3>
								<p class="examples__text">Раздел КМД  включает отдельные несущие колонны, вертикальные и горизонтальные связи из труб и уголков</p>
								<p class="examples__text">Общая площадь: <b>2100 м<sup>2</sup></b></p>
								<p class="examples__text">Общий вес: <b>87 т</b></p>
								<p class="examples__text">Марка стали: <b>С245 и C255</b></p>
							</div>
						</div>
					</div>
					<div class="examples__item">
						<div class="examples__inner">
							<img src="<?php echo get_template_directory_uri(); ?>/img/home/examples/5.jpg" alt="" class="examples__img">
							<div class="examples__mask">
								<h3 class="examples__header">Административно-складское сооружение.</h3>
								<p class="examples__text">Раздел КМД включает отдельные колонны и связи каркаса с несущими колоннами, рамой и  фахверком. </p>
								<p class="examples__text">Общая площадь: <b>1100м<sup>2</sup></b></p>
								<p class="examples__text">Общий вес: <b>244,3 т</b></p>
								<p class="examples__text">Марка стали: <b>С245</b></p>
							</div>
						</div>
					</div>
					<div class="examples__item">
						<div class="examples__inner">
							<img src="<?php echo get_template_directory_uri(); ?>/img/home/examples/6.jpg" alt="" class="examples__img">
							<div class="examples__mask">
								<h3 class="examples__header">Промышленное сооружение ЛЭП У-220-2т+14</h3>
								<p class="examples__text">Раздел КМД включает отдельные колонны и связи каркаса с несущими колоннами, рамой и фахверком</p>
								<p class="examples__text">Общая площадь: <b> 86,5 м<sup>2</sup></b></p>
								<p class="examples__text">Общий вес: <b>23,5 т</b></p>
								<p class="examples__text">Марка стали: <b>С245</b></p>
							</div>
						</div>
					</div>					
				</div>
			</div>
		</section>		
	</main>
</div>
<?php get_footer(); ?>
