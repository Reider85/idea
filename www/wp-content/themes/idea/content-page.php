<?php get_template_part( 'social');?>
<?php the_title( '<h1><span>','</span></h1>' ); ?>
<?php the_content(); ?>
<?php $obj=$wp_query->get_queried_object();?>
<?php if (($obj->ID==4)||($obj->ID==20)||($obj->ID==24)||($obj->ID==32)):?>
	<?php $query=new WP_Query(array('p'=>383));?>
	<?php $post=$query->get_posts();?>
	<?php echo($post[0]->post_content);?>
<?php endif;?>
<?php if ($obj->ID==4):?>
	<?php $query=new WP_Query(array('p'=>421));?>
	<?php $post=$query->get_posts();?>
	<?php echo($post[0]->post_content);?>
<?php endif;?>
<?php if ($obj->ID==39):?>
	<?php $query=new WP_Query(array('p'=>385));?>
	<?php $post=$query->get_posts();?>
	<?php echo($post[0]->post_content);?>
<?php endif;?>
<?php if (($obj->ID==39)||($obj->ID==2)):?>
	<?php $query=new WP_Query(array('p'=>429));?>
	<?php $post=$query->get_posts();?>
	<?php echo($post[0]->post_content);?>
<?php endif;?>
<?php if ($obj->ID==2):?>
	<?php $query=new WP_Query(array('p'=>452));?>
	<?php $post=$query->get_posts();?>
	<?php echo($post[0]->post_content);?>
<?php endif;?>
<?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>

