<?php get_header(); ?>
<main>
	<div class="col-wrap">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="retailer-card column fourth">
			<div class="column third">
				<?php
				if ( has_post_thumbnail() ) {
					the_post_thumbnail();
				} 
				?>
			</div>
			<div class="column two-thirds">
				<h3><?php the_title(); ?></h3>
				<ul class="retailer-info">
					<li><?php echo autoc_get_postdata('address-1'); ?></li>
					<li><?php echo autoc_get_postdata('address-2'); ?></li>
					<li><?php echo autoc_get_postdata('city'); ?></li>
					<li><?php echo autoc_get_postdata('state'); ?></li>
					<li><?php echo autoc_get_postdata('zip'); ?></li>
					<li><?php echo autoc_get_postdata('url'); ?></li>
				</ul>
			</div>
		</div>
	<?php endwhile; else: ?>
<?php endif; ?>
</div>
</main>
<?php get_footer(); ?>