<?php get_header(); ?>
<div class="content-area">
	<main class="site-main km">
		<?php wp_nav_menu(array(
			'theme_location' => 'services-nav',
			'container_class' => 'services-nav',
			'menu_class' => 'services-nav__wrapper lcw'
		)); ?>
		<article class="lcw">
			<h2>Проектирование и разработка КМ:</h2>
			<p>Наша компания проводит разработку конструкций металлических (КМ) любой степени сложности с последующей их деталировкой, причем необходимые чертежи и абсолютно вся проектная документация просчитываются с учетом технологических особенностей возведения зданий и сооружений с применением легких стальных тонкостенных конструкций (ЛСТК). Вся документация полностью соответствует требованиям, предъявляемым к ней ГОСТ и Российскими нормативами.</p>
			<p>Наши опытные инженеры и другие специалисты компании разработают необходимые проекты и подготовят рабочие чертежи конструкций металлических (КМ), а также наладят выпуск уже готового профиля в минимально возможный срок - в течение двух-трех недель - и в полном соответствии с подготовленной документацией. Кроме того, на профиль в обязательном порядке наносится электронная маркировка.</p>
			<p>Комплект рабочих чертежей конструкций металлических (КМ) включает в себя:</p>
			<ul>
				<li> рабочие чертежи КМ;</li>
				<li>данные о нагрузках на металлоконструкции; </li>
				<li>данные о нагрузках на фундаменты;</li>
				<li>чертежи конструкций зданий и сооружений, включая общие их виды; </li>
				<li>точные схемы расположения отдельных частей металлоконструкций;</li>
				<li>чертежи отдельных их узлов;</li>
				<li>спецификация на металлопрокат.</li>
			</ul>
			<p>В случае возникновения каких-либо проблем на любой из стадий разработки проектной документации вы можете обратиться к нам позвонив по телефону. Ведущие специалисты компании «BIG Construction» дадут исчерпывающие ответы на все интересующие вас вопросы, на высокопрофессиональном уровне проведут консультирование и предоставят необходимые рекомендации по решению возникших проблем. Мы всегда готовы помочь вам.</p>
		</article>
		<section class="order">
			<div class="order__wrapper lcw">
				<h2 class="order__header"><span>Заказать</span><span>проект</span></h2>
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
