<?php /* Template Name: Shop Template */ ?>
<?php get_header(); ?>
<main>
	<div class="headline"><h3><?php the_title(); ?></h3></div>
	<hr />
	<?php if (has_post_thumbnail( $post->ID ) ): ?>
	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
	$image = $image[0]; ?>
<?php else :
$image = get_bloginfo( 'stylesheet_directory') . '/images/default-cat-img.jpg'; ?>
<?php endif; ?>
<div class="cat-desc" style="background-image: url('<?php echo $image; ?>')" >

</div>
<hr />
<div class="masonry">
	<div class="grid-sizer"></div>
	<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
	<?php query_posts(array('posts_per_page' => 20, 'post_type' => 'product', 'orderby' => 'date', 'order' => 'desc', 'paged' => $paged)); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="item">
		<a href="<?php the_permalink(); ?>"><?php
		if ( has_post_thumbnail() ) {
			the_post_thumbnail('medium');
		} 
		?></a>
		<div class="overlay">
			<div class="col-wrap">
				<div class="add-pad hov-details full talignleft">
					<?php
			/**
			 * woocommerce_single_product_summary hook
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_price - 10
			 * @hooked woocommerce_template_single_excerpt - 20
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
			 */
			do_action( 'woocommerce_single_product_summary' );
			?>
		</div>
	</div>
</div>
</div>
<?php endwhile; else: ?>
<?php endif; ?>
</div>
<div class="woocommerce-pagination">
<?php echo paginate_links(array('type'=>'list')); ?>
</div>
</main>
<?php get_footer(); ?>