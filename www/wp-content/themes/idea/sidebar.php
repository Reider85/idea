<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) || is_active_sidebar( 'sidebar-1' )  ) : ?>
	<div id="left-column">
		<?php if ( has_nav_menu( 'sidebar' ) ) : ?>
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php
				// Primary navigation menu.
				wp_nav_menu( array(
						'menu_id'=>'sub-menu',
						'theme_location' => 'sidebar'
				));
				?>
			</nav><!-- .main-navigation -->
		<?php endif; ?>
		<!-- sub menu -->
		<div class="menu">
			<ul id="sub-menu">
				<li>
					<a class="outdoor-icon" href="#">Наружная реклама</a>
					<ul>
						<li><a href="#">Вывески</a></li>
						<li><a href="#">Информационные стенды</a></li>
						<li><a href="#">Объемные буквы</a></li>
						<li><a href="#">Оформление мест продаж</a></li>
						<li><a href="#">Световые короба</a></li>
						<li><a href="#">Таблички указатели</a></li>
						<li><a href="#">Штендеры</a></li>
					</ul>
				</li>
				<li>
					<a class="print-icon" href="#">Широкоформатная печать</a>
					<ul>
						<li><a href="#">Вывески</a></li>
						<li><a href="#">Информационные стенды</a></li>
						<li><a href="#">Объемные буквы</a></li>
						<li><a href="#">Оформление мест продаж</a></li>
					</ul>
				</li>
				<li>
					<a class="uv-icon" href="#">UV-печать</a>
					<ul>
						<li><a href="#">Световые короба</a></li>
						<li><a href="#">Таблички указатели</a></li>
						<li><a href="#">Штендеры</a></li>
					</ul>
				</li>
				<li>
					<a class="media-icon" href="#">Медиа-фасады, экраны</a>
					<ul>
						<li><a href="#">Световые короба</a></li>
						<li><a href="#">Таблички указатели</a></li>
						<li><a href="#">Штендеры</a></li>
					</ul>
				</li>
				<li>
					<a class="adv-icon" href="#">Размещение рекламы</a>
					<ul>
						<li><a href="#">Световые короба</a></li>
						<li><a href="#">Таблички указатели</a></li>
						<li><a href="#">Штендеры</a></li>
					</ul>
				</li>
				<li>
					<a class="flag-icon" href="#">Флаги, флагштоки</a>
					<ul>
						<li><a href="#">Световые короба</a></li>
						<li><a href="#">Таблички указатели</a></li>
						<li><a href="#">Штендеры</a></li>
					</ul>
				</li>
				<li>
					<a class="polygr-icon" href="#">Полиграфия</a>
					<ul>
						<li><a href="#">Световые короба</a></li>
						<li><a href="#">Таблички указатели</a></li>
						<li><a href="#">Штендеры</a></li>
					</ul>
				</li>
				<li>
					<a class="cloth-icon" href="#">Корпоративная одежда</a>
					<ul>
						<li><a href="#">Световые короба</a></li>
						<li><a href="#">Таблички указатели</a></li>
						<li><a href="#">Штендеры</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- last news -->
		<h2>Новости и акции</h2>
		<div id="last-news">
			<ul>
				<li>
					<h3>Новая акция</h3>
					<div class="date">14.03.2015</div>
					<div class="validity">с 18.05.2015 до 24.09.2015</div>
					<p>Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности требуют определения и уточнения системы обучения кадров, соответствует насущным потребностям.</p>
				</li>
				<li>
					<h3>Новая акция</h3>
					<div class="date">14.03.2015</div>
					<div class="validity">с 18.05.2015 до 24.09.2015</div>
					<p>Постоянное информационно-пропагандистское обеспечение нашей деятельности требуют определения и уточнения системы обучения кадров, соответствует.</p>
				</li>
				<li>
					<h3>Новая акция</h3>
					<div class="date">14.03.2015</div>
					<div class="validity">с 18.05.2015 до 24.09.2015</div>
					<p>Товарищи, дальнейшее развитие различных форм деятельности играет важную роль в формировании систем массового участия.</p>
				</li>
			</ul>
			<a href="#" class="btn btn-orange">Посмотреть все</a>
		</div>
		<div id="secondary" class="secondary" style="display:none;">

			<?php if ( has_nav_menu( 'primary' ) ) : ?>
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php
					// Primary navigation menu.
					wp_nav_menu( array(
						'menu_class'     => 'nav-menu',
						'theme_location' => 'primary',
					) );
					?>
				</nav><!-- .main-navigation -->
			<?php endif; ?>

			<?php if ( has_nav_menu( 'social' ) ) : ?>
				<nav id="social-navigation" class="social-navigation" role="navigation">
					<?php
					// Social links navigation menu.
					wp_nav_menu( array(
						'theme_location' => 'social',
						'depth'          => 1,
						'link_before'    => '<span class="screen-reader-text">',
						'link_after'     => '</span>',
					) );
					?>
				</nav><!-- .social-navigation -->
			<?php endif; ?>

			<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
				<div id="widget-area" class="widget-area" role="complementary">
					<?php dynamic_sidebar( 'sidebar-1' ); ?>
				</div><!-- .widget-area -->
			<?php endif; ?>

		</div><!-- .secondary -->
	</div>


<?php endif; ?>
