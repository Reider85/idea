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
						'theme_location' => 'sidebar',
						'before'=>'<div>',
						'after'=>'</div>'
				));
				?>
			</nav><!-- .main-navigation -->
		<?php endif; ?>
		<!-- sub menu -->
		<!-- last news -->
		<h2>Новости и акции</h2>
		<?php $news=new WP_Query(array('category_name'=>'news','posts_per_page'=>2,'paged'=>1));?>
		<div id="last-news">
			<ul>
				<?php if ( $news->have_posts() ) : ?>

					<?php

					// Start the Loop.
					while ( $news->have_posts() ) : $news->the_post();

						/*
                         * Include the post format-specific template for the content. If you want to
                         * use this in a child theme, then include a file called called content-___.php
                         * (where ___ is the post format) and that will be used instead.
                         */
						get_template_part( 'content','short' );

					endwhile;

				endif;
				?>
			</ul>
			<a href="/category/news/" class="btn btn-orange">Посмотреть все</a>
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
