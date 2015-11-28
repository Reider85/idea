<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<title>Рекламное агентство &laquo;Идея&raquo;</title>

	<!-- favicon -->
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/favicon.ico" rel="icon">

	<!-- css -->
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/full-slider.css" rel="stylesheet">


	<!-- js -->
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/main.js"></script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- header -->
<header class="navbar-fixed-top">
	<div class="container">
		<h1 id="logo"><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.png" alt="" /></a></h1>
		<div id="caption">
			Мы реализуем самые оригинальные идеи и учитываем индивидуальные особенности клиентов
		</div>
		<div id="info">
			<div id="time" class="">
				<h2>Время работы:</h2>
				<strong>9:00</strong> до <strong>17:00</strong>
				<span>сб. вс. выходной</span>
			</div>
			<div id="mail" class="">
				<h2>E-mail:</h2>
				<strong>idea163@yandex.ru</strong>
			</div>
			<div id="phone" class="">
				<h2>Телефон:</h2>
				(8482) <strong>55-10-88</strong>
				</br>(8482) <strong>55-90-88</strong>
			</div>
		</div>
	</div>
	<div id="nav">
		<div class="container">
			<ul id="main-menu">
				<li><a href="#" class="active">Главная</a></li>
				<li><a href="/about_idea/">О компании</a></li>
				<li><a href="#">Услуги</a></li>
				<li><a href="#">Новости</a></li>
				<li><a href="/contacts/">Контакты</a></li>
			</ul>
			<ul id="social">
				<li><a class="fb" href="#" title="Facebook"></a></li>
				<li><a class="tw" href="#" title="Twitter"></a></li>
				<li><a class="vk" href="#" title="ВКонтакте"></a></li>
				<li id="search">
					<button src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/search_icon.png" title="Поиск"></button>
					<form>
						<input type="text" value="" />
						<input class="btn btn-default" type="submit" value="Найти" />
					</form>
		</div>
		</li>
		</ul>
	</div>
	</div>
</header>

