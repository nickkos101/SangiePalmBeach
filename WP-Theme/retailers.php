<?php /* Template Name: Retailer List */ ?>
<?php get_header(); ?>
<main>
	<h1 class="page-title"><?php the_title(); ?></h1>
		<?php if (has_post_thumbnail( $post->ID ) ): ?>
	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
	$image = $image[0]; ?>
<?php else :
$image = get_bloginfo( 'stylesheet_directory') . '/images/default-cat-img.jpg'; ?>
<?php endif; ?>
<div class="cat-desc" style="background-image: url('<?php echo $image; ?>')" >

		</div>
	<div class="col-wrap">
		<div class="content-wrap">
		<?php query_posts(array('posts_per_page' => -1, 'post_type' => 'retailers')); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="column-nopad third">
			<div class="retailer-card">
			<div class="column-nopad third">
				<a href="<?php echo autoc_get_postdata('url'); ?>" target="_blank" title="<?php the_title(); ?>"><?php
				if ( has_post_thumbnail() ) {
					the_post_thumbnail('thumb');
				} 
				?></a>
			</div>
			<div class="column two-thirds">
				<h3><?php the_title(); ?></h3>
				<ul class="retailer-info">
					<li><?php echo autoc_get_postdata('address-1'); ?>&nbsp;<?php echo autoc_get_postdata('address-2'); ?></li>
					<li><?php echo autoc_get_postdata('city'); ?>,&nbsp;<?php echo autoc_get_postdata('state'); ?>&nbsp; <?php echo autoc_get_postdata('zip'); ?></li>
					<li><a href="<?php echo autoc_get_postdata('url'); ?>" target="_blank" title="<?php the_title(); ?>">Visit Website</a></li>
				</ul>
			</div>
		</div>
	</div>
	<?php endwhile; else: ?>
<?php endif; ?>
</div>
</div>
</main>
<?php get_footer(); ?>