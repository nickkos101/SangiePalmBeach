<?php /* Template Name: Cart */ ?>
<?php get_header(); ?>
<main>
	<div class="gray-wrap col-wrap cart-style">
		<div class="container">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h3 class="cart-title"><?php the_title(); ?></h3>
			<hr />
			<div class="wishlist-wrapper">
			<?php the_content(); ?>
		<?php endwhile; endif; ?>
	</div>
	</div>
</div>
</main>
<?php get_footer(); ?>