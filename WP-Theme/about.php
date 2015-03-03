<?php /* Template Name: About Us */ ?>
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
	<div class="wishlist-wrapper about-page">
	<?php the_content(); ?>
</div>
</main>
<?php get_footer(); ?>