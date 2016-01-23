<?php
/**
 * The template for displaying Category pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<div class="container">
<?php get_sidebar()?>
	<div id="right-column">
		<?php get_template_part( 'social');?>
		<?php $paged = (get_query_var('page')) ? get_query_var('page') : 1;?>
		<?php $query=new WP_Query(array('category_name'=>'news','posts_per_page'=>3,'paged'=>$paged));?>
		<h1><span><?php echo $query->get_queried_object()->name?></span></h1>

		<ul id="news">
			<?php if ( $query->have_posts() ) : ?>

			<?php

					// Start the Loop.
					while ( $query->have_posts() ) : $query->the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content','short' );

					endwhile;

					kama_pagenavi('','',true,array(),$query);

				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );

				endif;
			?>
		</ul>
	</div>
<?php get_footer(); ?>
