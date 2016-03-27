<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<title>Рекламая компания &laquo;Идея&raquo;</title>

	<!-- favicon -->
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/favicon.ico" rel="icon">

	<!-- css -->
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap-select.css" rel="stylesheet">
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/full-slider.css" rel="stylesheet">
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/pgwslideshow.min.css" rel="stylesheet">

	<!-- js -->
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap-select.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/pgwslideshow.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/main.js"></script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- header -->
<header class="navbar-fixed-top">
	<div class="container">
		<h1 id="logo"><a href="/index.php"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.png" alt="" /></a></h1>
		<div id="caption">
			Мы реализуем самые оригинальные идеи и учитываем индивидуальные особенности клиентов
		</div>
		<div id="info">
			<div id="time" class="">
				<h2>Время работы:</h2>
				<strong>9:00</strong> до <strong>17:30</strong>
				<span>сб. вс. выходной</span>
			</div>
			<div id="mail" class="">
				<h2>E-mail:</h2>
				<strong>idea163@yandex.ru</strong><br>
				<strong>idea163reklama@yandex.ru</strong>
			</div>
			<div id="phone" class="">
				<h2>Телефон:</h2>
				(8482) <strong>55-10-88</strong>
				</br>(8482) <strong>55-90-88</strong>
			</div>
		</div>
	</div>
</header>
<div id="nav">
	<div class="container">
		<ul id="main-menu"><?php $categories=get_the_category();$category=isset($categories[0])?$categories[0]:[];?>
			<li><a href="/index.php" <?php if ($_SERVER["REQUEST_URI"]==''||$_SERVER["REQUEST_URI"]=='/'):?>class="active"<?php endif;?>>Главная</a></li>
			<li><a href="/about_idea/" <?php if (strstr(get_permalink($post->ID),'/about_idea/')):?>class="active"<?php endif;?>>О компании</a></li>
			<li><a href="/portfolio/" <?php if ((isset($category->category_nicename)&&($category->category_nicename=='portfolio'))||(strstr(get_permalink($post->ID),'/portfolio/'))):?>class="active"<?php endif;?>>Портфолио</a></li>
			<li><a href="/category/news/" <?php if (isset($category->category_nicename)&&($category->category_nicename=='news')):?>class="active"<?php endif;?>>Новости</a></li>
			<li><a href="/contacts/" <?php if (strstr(get_permalink($post->ID),'/contacts/')):?>class="active"<?php endif;?>>Контакты</a></li>
		</ul>
		<ul id="social">
			<!--<li><a class="fb" href="#" title="Facebook"></a></li>
            <li><a class="tw" href="#" title="Twitter"></a></li>-->
			<li><a class="vk" href="http://vk.com/idea_163" title="ВКонтакте"></a></li>
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
