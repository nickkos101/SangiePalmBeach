<?php /* Template Name: Lookbook List */ ?>
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
		<hr />
	<div class="col-wrap">
		<div class="content-wrap">
		<?php query_posts(array('posts_per_page' => -1, 'post_type' => 'lookbooks')); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="lookbook-card column third">
				<a href="<?php echo autoc_get_postdata('lookbook-url'); ?>" target="_blank" title="<?php the_title(); ?>"><?php
				if ( has_post_thumbnail() ) {
					the_post_thumbnail('medium');
				} 
				?></a>
			<div class="column-nopad two-thirds">
				<a href="<?php echo autoc_get_postdata('lookbook-url'); ?>" target="_blank" title="<?php the_title(); ?>"><h3><?php the_title(); ?></h3></a>
			</div>
			<div class="column-nopad third">
				<a href="<?php echo autoc_get_postdata('lookbook-url'); ?>" target="_blank" class="button" title="<?php the_title(); ?>">View</a>
			</div>
		</div>
		</div>
	<?php endwhile; else: ?>
<?php endif; ?>
</div>
</div>
</main>
<?php get_footer(); ?>