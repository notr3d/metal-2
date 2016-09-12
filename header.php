<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700&subset=cyrillic-ext,latin-ext" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&subset=cyrillic-ext" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="site">
	<header class="site-header">
		<div class="site-header__wrapper lcw">
			<div class="site-header__col site-header__col--left">
				<a href="home" class="site-logo"></a>
			</div>
			<div class="site-header__col site-header__col--right">
				<div class="top-panel">
					<div class="top-panel__item">Москва, ул. Ибрагимова, д.31</div>
					<div class="top-panel__item">
						<a href="mailto:info@bigkmd.ru">info@bigkmd.ru</a>
					</div>
					<div class="top-panel__item">Заказать звонок</div>
					<div class="top-panel__item top-panel__item--tel">+7 (495) 789-36-86</div>
				</div>
				<?php wp_nav_menu(array(
					'menu_class' => 'header-nav'
				)); ?>
			</div>			
		</div>
	</header>
	<section class="cb-popup">
		<div class="cb-popup__window">
			<h2 class="cb-popup__header">Заказать звонок</h2>
			<form class="cb-popup__form">
				<input type="text" required>
				<input type="tel" required>
				<textarea required></textarea>
				<input type="submit">
			</form>
		</div>
	</section>
	<div class="site-content">
