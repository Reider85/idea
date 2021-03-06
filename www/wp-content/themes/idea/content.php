<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<?php get_template_part( 'social');?>
<?php the_title( '<h1><span>','</span></h1>' ); ?>

	<?php
		// Post thumbnail.
		twentyfifteen_post_thumbnail();
	?>

	<?php $categories=get_the_category();$category=$categories[0];?>
	<div class="<?php if ($category->cat_ID==8):?>inner<?php endif;?>" id="<?php if ($category->cat_ID==2):?>news<?php else:?><?php echo $category->category_nicename?><?php endif;?>">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s', 'twentyfifteen' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php if ($category->cat_ID==8):?>
		<?php $query=new WP_Query(array('p'=>448));?>
		<?php $post=$query->get_posts();?>
		<?php echo($post[0]->post_content);?>
	<?php endif;?>
	<?php
		// Author bio.
		if ( is_single() && get_the_author_meta( 'description' ) ) :
			get_template_part( 'author-bio' );
		endif;
	?>

	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
