<?php /* Template Name: Video List */ ?>
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
	<?php query_posts(array('posts_per_page' => -1, 'post_type' => 'videos')); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="column full white-wrap">
		<h2><?php the_title(); ?></h2>
		<?php if ( autoc_get_postdata('vimeo-id') ) { ?>
		<iframe src="//player.vimeo.com/video/<?php echo autoc_get_postdata('vimeo-id'); ?>?color=ffffff&title=0&byline=0&portrait=0" width="100%" height="560" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
		<?php } ?>
		<?php if ( autoc_get_postdata('youtube-id') ) { ?>
		<iframe width="100%" height="560" src="https://www.youtube.com/embed/<?php echo autoc_get_postdata('youtube-id'); ?>" frameborder="0" allowfullscreen></iframe>
		<?php } ?>
		<?php the_content(); ?>
	</div>
<?php endwhile; else: ?>
<?php endif; ?>
</div>
</main>
<?php get_footer(); ?>