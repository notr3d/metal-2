<?php get_header(); ?>
<div class="content-area">
	<main class="site-main foundation">
		<?php wp_nav_menu(array(
			'theme_location' => 'services-nav',
			'container_class' => 'services-nav',
			'menu_class' => 'services-nav__wrapper lcw'
		)); ?>
		<article class="lcw">
			<h2>Проектирование фундамента:</h2>
			<p>При строительстве нового здания первым и основным вопросом, к решению которого стоит подойти с особым вниманием, является проектирование фундамента. Именно эта конструкция будет удерживать и равномерно распределять нагрузку и именно поэтому она настолько важна. Ошибки, допущенные еще на этапе проектирования могут в будущем привести к плачевным последствиям. Если вы заинтересованы в том, чтобы качество и надежность будущей постройки находились на высоком уровне, то данные работы стоит доверить профессионалам компании «BIG Construction».</p>
			<p>Наши сотрудники готовы помочь вам! Мы выполняем проектирование фундамента здания в сжатые сроки с соблюдением всех положений СНиП и нормативных документов.</p>
			<p>В зависимости от целого ряда условий (климатическая зона, количество этажей, назначение строения) проектирование фундамента для будущей постройки может быть нескольких типов. По этой причине в рамках данной услуги мы предлагаем несколько ее видов. Рассмотрим каждый из них чуть подробнее.</p>
		</article>
		<section class="items items--foundation">
			<div class="items__wrapper lcw">
				<div class="items__item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/services/foundation/1.png" alt="" class="items__img">
					<div class="items__header">Разметка</div>
					<div class="items__text">Один из самых распространенных вариантов. Чаще всего используется для индивидуального строительства, хотя является достаточно дорогим. Конструкция представляет из себя полосу железобетона, охватывающую весь периметр здания, а также под всеми стенами.</div>
				</div>
				<div class="items__item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/services/foundation/2.png" alt="" class="items__img">
					<div class="items__header">Монолитный фундамент</div>
					<div class="items__text">Применяется для частного строительства (в основном при возведении легких деревянных домов). Данная конструкция закладывается под всю площадь здания и применяется в условиях сильного сжатия грунта.</div>
				</div>
				<div class="items__item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/services/foundation/3.png" alt="" class="items__img">
					<div class="items__header">Столбчатый фундамент</div>
					<div class="items__text">Подразумевает использование специальных столбов, которые устанавливаются в углах здания, что позволяет равномерно распределить нагрузку на грунт. Достаточно дешевый вариант, который в то же время не подходит для строительства тяжелых домов.</div>
				</div>
				<div class="items__item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/services/foundation/4.png" alt="" class="items__img">
					<div class="items__header">Свайный фундамент</div>
					<div class="items__text">Более бюджетный вариант – свайный фундамент применяется, преимущественно, в условиях неустойчивого грунта. Его выбирают в основном для строительства тонкостенных деревянных сооружений. Это типичный фундамент для деревянного дома, часто – фундамент для бани. Свайный фундамент позволяет строить практически при любом рельефе участка без сложных работ по его выравниванию.</div>
				</div>
				<div class="items__item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/services/foundation/5.png" alt="" class="items__img">
					<div class="items__header">Мелкозаглубленный фундамент</div>
					<div class="items__text">Актуально при строительстве небольших кирпичных и деревянных домов. Главным его преимуществом является невысокая стоимость, что позволяет существенно сэкономить на строительстве. Однако, в процессе строительства важно соблюдать несколько правил, которые важны для сохранности конструкции. Прежде всего не рекомендуется оставлять его незагруженным в холодное время года. Кроме этого не допускается его закладка на промерзший грунт, а ширина траншеи для коммуникаций под фундаментом не может превышать 0,9м.</div>
				</div>
				<div class="items__item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/services/foundation/6.png" alt="" class="items__img">
					<div class="items__header">Фундамент под резервуар</div>
					<div class="items__text">Еще один из видов работ, осуществляемый нашими специалистами. В данном случае очень важна предварительная подготовка - так как требования к данным фундаментам порой кардинально отличаются в зависимости от природных условий в конкретном регионе.</div>
				</div>								
			</div>
		</section>
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
