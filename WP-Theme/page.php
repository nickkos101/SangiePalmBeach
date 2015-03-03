<?php get_header(); ?>
<main>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="headline"><h3><?php the_title(); ?></h3></div>
	<hr />
	<div class="wishlist-wrapper">
	<?php if ( has_post_thumbnail() ) {
		the_post_thumbnail();
	}  ?>
	<?php the_content(); ?>
<?php endwhile; else: ?>
<?php endif; ?>
</div>
</main>
<?php get_footer(); ?>