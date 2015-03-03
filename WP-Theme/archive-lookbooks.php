<?php get_header(); ?>
<main>
	<div class="col-wrap">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="lookbook-card column third">
			<div class="column full">
				<a href="<?php echo autoc_get_postdata('lookbook-url'); ?>" target="_blank" title="<?php the_title(); ?>"><?php
				if ( has_post_thumbnail() ) {
					the_post_thumbnail('medium');
				} 
				?></a>
			</div>
			<div class="column full">
				<a href="<?php echo autoc_get_postdata('lookbook-url'); ?>" target="_blank" title="<?php the_title(); ?>"><h3><?php the_title(); ?></h3></a>
				<a href="<?php echo autoc_get_postdata('lookbook-url'); ?>" target="_blank" class="button" title="<?php the_title(); ?>"></a>
			</div>
		</div>
	<?php endwhile; else: ?>
<?php endif; ?>
</div>
</main>
<?php get_footer(); ?>