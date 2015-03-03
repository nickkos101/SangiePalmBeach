<?php /* Template Name: Blog Page */ ?>
<?php get_header(); ?>
<main>
	<h1 class="page-title"><?php the_title(); ?></h1>
		<?php if (has_post_thumbnail( $post->ID ) ): ?>
	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
	$image = $image[0]; ?>
<?php else :
$image = get_bloginfo( 'stylesheet_directory') . '/images/default-cat-img.jpg'; ?>
<?php endif; ?>
<hr />
<div class="cat-desc" style="background-image: url('<?php echo $image; ?>')" >

		</div>
		<div class="content-wrap">
	<div class="masonry">
		<div class="grid-sizer"></div>
		<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
		<?php query_posts(array('posts_per_page' => 20, 'orderby' => 'date', 'order' => 'desc', 'paged' => $paged)); ?>
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
						<h1><?php the_title(); ?></h1>
						<p class="price"><?php the_date(); ?></p>
						<?php the_excerpt(); ?>
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
</div>
</main>
<?php get_footer(); ?>