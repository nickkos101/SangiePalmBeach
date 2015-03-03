		<?php get_header(); ?>
		<?php $optionname= 'main_theme_options'; $mainoptions = get_option($optionname); ?>
		<main>
			<!-- <div class="cart-banner">
				<div class="cart-contents">
					3
				</div>
			</div> -->
			<div class="col-wrap">
				<div class="feature-video">
					<video autoplay loop poster="<?php echo get_template_directory_uri(); ?>/images/slide-2.jpg" id="bgvid">
						<source src="<?php echo $mainoptions['vidLinkMp4']; ?>" type="video/mp4" />
							<source src="<?php echo $mainoptions['vidLinkwebM']; ?>" type="video/webm" />
							</video>
							<div class="video-overlay"></div>
							<div class="cta-block taligncenter">
								<h2><?php echo $mainoptions['vidTitle']; ?></h2>
								<p><?php echo $mainoptions['vidContent']; ?></p>
								<a href="<?php echo $mainoptions['vidButtonLink']; ?>" class="button"><?php echo $mainoptions['vidButtonText']; ?></a>
							</div>
						</div>
					</div>
					<hr/>
					<div class="content-wrap col-wrap ">
						<div class="feature-banner">
							<div class="column half">
								<div class="slider">
									<?php query_posts(array('posts_per_page' => -1, 'post_type' => 'slider')); ?>
									<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
									<div class="slide" style="background-image:url('<?php echo get_featured_url(); ?>'); background-color:<?php echo autoc_get_postdata('bgcolor'); ?>; background-position:<?php echo autoc_get_postdata('imgalignment'); ?>; background-size:<?php echo autoc_get_postdata('bgsize'); ?>;">
										<div class="slide-caption <?php echo autoc_get_postdata('capalignment'); ?>">
											<a href="<?php echo autoc_get_postdata('link'); ?>">
												<div class="slide-headline">
													<?php the_title(); ?>
												</div>
												<div class="slide-subhead" style="<?php if (autoc_get_postdata('bgcolor') == '#000') {echo 'color:#fff;';}  elseif (autoc_get_postdata('bgcolor') == '#fff') {echo 'color:#000;';} ?>">
													<i><?php echo autoc_get_postdata('subtitle'); ?></i>
												</div>
												<div class="slide-description" style="<?php if (autoc_get_postdata('bgcolor') == '#000') {echo 'color:#fff;';}  elseif (autoc_get_postdata('bgcolor') == '#fff') {echo 'color:#000;';} ?>">
													<p><?php echo autoc_get_postdata('desc'); ?></p>
												</div>
											</a>
										</div>
									</div>
								<?php endwhile; else: ?>
							<?php endif; ?>
						</div>
					</div>
					<div class="column half">
						<div class="slider">
							<?php query_posts(array('posts_per_page' => -1, 'post_type' => 'slider-2')); ?>
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<div class="slide" style="background-image:url('<?php echo get_featured_url(); ?>'); background-color:<?php echo autoc_get_postdata('bgcolor'); ?>; background-position:<?php echo autoc_get_postdata('imgalignment'); ?>; background-size:<?php echo autoc_get_postdata('bgsize'); ?>;">
								<div class="slide-caption <?php echo autoc_get_postdata('capalignment'); ?>">
									<a href="<?php echo autoc_get_postdata('link'); ?>">
										<div class="slide-headline">
											<?php the_title(); ?>
										</div>
										<div class="slide-subhead" style="<?php if (autoc_get_postdata('bgcolor') == '#000') {echo 'color:#fff;';}  elseif (autoc_get_postdata('bgcolor') == '#fff') {echo 'color:#000;';} ?>">
											<i><?php echo autoc_get_postdata('subtitle'); ?></i>
										</div>
										<div class="slide-description" style="<?php if (autoc_get_postdata('bgcolor') == '#000') {echo 'color:#fff;';}  elseif (autoc_get_postdata('bgcolor') == '#fff') {echo 'color:#000;';} ?>">
											<p><?php echo autoc_get_postdata('desc'); ?></p>
										</div>
									</a>
								</div>
							</div>
						<?php endwhile; else: ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="masonry">
			<div class="grid-sizer"></div>
			<?php query_posts(array('posts_per_page' => -1, 'post_type' => 'product', 'orderby' => 'menu_order', 'meta_value' => 'yes', 'meta_key' => '_featured')); ?>
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
</div>




<hr />
<div class="instagram-wrapper">
	<div class="instagram-feed radial-grey">
		<?php instaGramFeed('663058250','663058250.5b9e1e6.79c7374903cb4870a28a5ed015604a81'); ?>
	</div>
</div>
</main>
<?php get_footer(); ?>