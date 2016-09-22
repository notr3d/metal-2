<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png"/>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700&subset=cyrillic-ext,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&subset=cyrillic-ext" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/featherlight.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/featherlight.gallery.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css">
	<meta name="yandex-verification" content="7955c531346cf4cb"/>
	<meta name="google-site-verification" content="PL6BEgz5AmDvRtQXV1tgIkxbyZH-732Pzkytf2BxTvM"/>
	<meta name='wmail-verification' content='3820ccc998cbac0b36aefa9a80dbea3b'/>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="site">
	<header class="site-header">
		<div class="site-header__wrapper lcw">
			<div class="site-header__col site-header__col--left">
				<a href="<?php echo get_permalink(get_page_by_title('главная')->ID)?>" class="site-logo"></a>
			</div>
			<div class="site-header__col site-header__col--right">
				<div class="top-panel">
					<!--<div class="top-panel__item top-panel__item--address">
						<span><a href="contacts">г. Москва, ул. Ибрагимова, д.31</a></span>
					</div>-->
					<div class="top-panel__item top-panel__item--email">
						<a href="mailto:info@bigkd.ru">info@bigkd.ru</a>
					</div>
					<div class="top-panel__item top-panel__item--callback">
						<span class="header-form-open">Заказать звонок</span>
					</div>
					<div class="top-panel__item top-panel__item--tel">+7 (495) 726-57-22</div>
				</div>
				<?php wp_nav_menu(array(
					'theme_location' => 'header-nav',
					'menu_class' => 'header-nav'
				)); ?>
			</div>			
		</div>
	</header>
	<section class="header-form">
		<div class="header-form__window">
			<h2 class="header-form__header">Заказать звонок</h2>
			<?php echo do_shortcode( '[contact-form-7 title="header form"]' ); ?>
			<div class="header-form__close">×</div>
		</div>
	</section>
	<div class="site-content">
