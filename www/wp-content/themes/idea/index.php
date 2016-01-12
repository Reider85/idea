<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<!-- slider -->
<div id="myCarousel" class="carousel slide">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>

	<!-- Wrapper for Slides -->
	<div class="carousel-inner">
		<div class="item active">
			<!-- Set the first background image using inline CSS below. -->
			<div class="fill" style="background-image:url('/wp-content/themes/idea/img/sliders/main_slider3.jpg');"></div>
			<div class="carousel-caption">
				<h2>Caption 1</h2>
			</div>
		</div>
		<div class="item">
			<!-- Set the second background image using inline CSS below. -->
			<div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
			<div class="carousel-caption">
				<h2>Caption 2</h2>
			</div>
		</div>
		<div class="item">
			<!-- Set the third background image using inline CSS below. -->
			<div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
			<div class="carousel-caption">
				<h2>Caption 3</h2>
			</div>
		</div>
	</div>

	<!-- Controls -->
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		<span class="icon-prev"></span>
	</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">
		<span class="icon-next"></span>
	</a>

</div>

<!-- offer -->
<div id="offer">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<span>При размещении рекламы на 8 видеостойках на срок от 4 месяцев, рекламный ролик в ПОДАРОК!</span>
			</div>
			<div class="col-md-3">
				<a href="#" class="btn btn-blue btn-lg">Заказать сейчас</a>
				<!--button class="btn btn-blue btn-lg">Заказать сейчас</button>
                <input class="btn btn-blue btn-lg" type="submit" value="Заказать сейчас" /-->
			</div>
		</div>
	</div>
</div>

<!-- service -->
<h1 class="main-title container"><strong>Наши <span>услуги</span></strong></h1>

<div class="container">
	<div id="service">
		<div class="lg special">
			<span>Наружная реклама</span>
			<strong>от 1000 руб</strong>
			<a href="/naruzhnaja_reklama/" class="btn btn-default">Подробнее</a>
		</div>
		<div class="border-0088cf">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/service_print.jpg" alt="" />
			<span>Широкоформатная печать</span>
			<a href="shirokoformatnaja_pechat/" class="btn btn-default">Подробнее</a>
		</div>
		<!--<div class="border-8fcb39">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/service_media.jpg" alt="" />
			<span>Медиа-фасады</span>
			<a href="#" class="btn btn-default">Подробнее</a>
		</div>-->
		<div class="border-a54d2f">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/service_adv.jpg" alt="" />
			<span>Размещение рекламы</span>
			<a href="/razmeshhenie_reklamy/" class="btn btn-default">Подробнее</a>
		</div>
		<div class="border-ce492a">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/service_flag.jpg" alt="" />
			<span>Флаги, флагштоки</span>
			<a href="/flagi_flagshtoki/" class="btn btn-default">Подробнее</a>
		</div>
		<div class="border-67912b">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/service_polygr.jpg" alt="" />
			<span>Полиграфия</span>
			<a href="/poligrafija/" class="btn btn-default">Подробнее</a>
		</div>
		<div class="border-3aaaab">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/service_cloth.jpg" alt="" />
			<span>Корпоративная одежда</span>
			<a href="#" class="btn btn-default">Подробнее</a>
		</div>
		<div class="lg border-d69320">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/service_light.jpg" alt="" />
			<span>Световые короба</span>
			<a href="/lightbox/" class="btn btn-default">Подробнее</a>
		</div>
        <div class="border-996241">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/service_design.jpg" alt="" />
            <span>Дизайн</span>
            <a href="#" class="btn btn-default">Подробнее</a>
        </div>
		<div class="lg border-f7a80d">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/service_letters.jpg" alt="" />
			<span>Объемные буквы</span>
			<a href="#" class="btn btn-default">Подробнее</a>
		</div>
		<div class="border-db4437">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/service_info.jpg" alt="" />
			<span>Информационные стенды</span>
			<a href="#" class="btn btn-default">Подробнее</a>
		</div>
		<div class="border-67912b">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/service_uv.jpg" alt="" />
			<span>UV-печать</span>
			<a href="#" class="btn btn-default">Подробнее</a>
		</div>

	</div>
</div>

<!-- about -->
<div id="about">
	<div class="container">
		<h1>Рекламная компания “ИДЕЯ”</h1>
		<p>является динамично развивающимся производителем рекламной продукции полного цикла. РК "Идея" это:</p>
		<ul>
			<li>
						<span>
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/smile_icon.png" alt="" />
							Дружный коллектив
						</span>
                Уделяющий индивидуальное внимание и проявляющий заботу о каждом клиенте
			</li>
			<li>
						<span>
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/reward_icon.png" alt="" />
							Профессионализм
						</span>
                Опыт успешной реализации более 100 проектов различной степени сложности
            </li>
			<li>
						<span>
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/customer_icon.png" alt="" />
							Индивидуальный подход
						</span>
                Подбор оптимального решения и быстрое реагирование на изменение потребностей заказчика
            </li>
		</ul>
		<a href="/about_idea/" class="btn btn-blue">Подробнее</a>
	</div>
</div>

<!-- works -->
<h1 class="main-title container"><strong>Наши <span>работы</span></strong></h1>
<div id="works" class="container">
	<ul>
		<li><button class="btn btn-blue">Все</button></li>
		<li><button class="btn btn-default">Наружная реклама</button></li>
		<li><button class="btn btn-default">Объемные буквы</button></li>
		<li><button class="btn btn-default">Оформление мест продаж</button></li>
		<li><button class="btn btn-default">Световые коробы</button></li>
		<li><button class="btn btn-default">Флаги</button></li>
		<li><button class="btn btn-default">Корпоративная одежда</button></li>
		<li><button class="btn btn-default">Таблички указатели</button></li>
		<li><button class="btn btn-default">UV-печать</button></li>
		<li><button class="btn btn-default">Информационные стенды</button></li>
		<li><button class="btn btn-default">Вывески</button></li>
	</ul>
	<div>
		<a href="#" title="Наименование работы"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/works/work_01.jpg" alt="" /></a>
		<a href="#" title="Наименование работы"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/works/work_02.jpg" alt="" /></a>
		<a href="#" title="Наименование работы"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/works/work_03.jpg" alt="" /></a>
		<a href="#" title="Наименование работы"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/works/work_04.jpg" alt="" /></a>
		<a href="#" title="Наименование работы"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/works/work_05.jpg" alt="" /></a>
		<a href="#" title="Наименование работы"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/works/work_06.jpg" alt="" /></a>
		<a href="#" title="Наименование работы"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/works/work_07.jpg" alt="" /></a>
		<a href="#" title="Наименование работы"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/works/work_08.jpg" alt="" /></a>
		<a href="#" title="Наименование работы"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/works/work_09.jpg" alt="" /></a>
		<a href="#" title="Наименование работы"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/works/work_10.jpg" alt="" /></a>
	</div>
	<a href="#" class="btn btn-blue">Посмотреть все работы</a>
</div>

<!-- map -->
<div id="map">
	<div class="container">
		<form>
			<p>Самарская обл.,
				</br>г. Тольятти, ул Автостроителей, д.  84 А</p>
			<p>(8482) 55-10-88, 55-90-88,
				</br>+7(927)894-45-50</p>
			<h3>Оставить сообщение</h3>
			<input type="text" placeholder="E-mail" />
			<input type="text" placeholder="Имя" />
			<textarea placeholder="Сообщение"></textarea>
			<input class="btn btn-blue" type="submit" value="Отправить" />
		</form>
	</div>
	<iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d2820.328256484054!2d49.326007626406835!3d53.529130287414965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e0!4m0!4m3!3m2!1d53.529311199999995!2d49.3241648!5e0!3m2!1sru!2sru!4v1445767079344" width="100%" height="650" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<?php get_footer(); ?>
