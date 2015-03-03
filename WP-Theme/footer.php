		<footer>
			<hr/>
			<div class="col-wrap footer-signup">
				<div class="column two-thirds talignleft">
					<div class="icon-callout fourth taligncenter">
						<img src="<?php echo get_template_directory_uri(); ?>/images/arrow-cross.png" alt="Sangie Newsletter" />
					</div>
					<div class="callout-text half">
						<h2>Stay <span class="green">Connected</span></h2>
												<p>Enter your email address to get updates on special deals, new arrivals and upcoming promotions on social media.</p> 
						<?php echo do_shortcode( '[woochimp_form]' ); ?>
					</div>
				</div>
				<div class="column half talignleft">

				</div>
			</div>
			<div class="col-wrap footer-info">
				<div class="column fourth talignleft">
					<?php dynamic_sidebar( 'sidebar-2' ); ?>
				</div>
				<div class="column fourth talignleft">
					<?php dynamic_sidebar( 'sidebar-3' ); ?>
				</div>
				<div class="column fourth talignleft">
					<?php dynamic_sidebar( 'sidebar-4' ); ?>
				</div>
				<div class="column fourth talignleft">
					<?php dynamic_sidebar( 'sidebar-5' ); ?>
				</div>
			</div>
			<div class="col-wrap footer-bottom">
				<div class="column fourth taligncenter">
					<p>&copy; Sangie Palm Beach | <a href="<?php echo get_site_url(); ?>/contact"><i class="fa fa-envelope"></i> Message</a></p>
				</div>
				<div class="column half taligncenter">
					<p>3522 Old Lighthouse Cir. <span class="ft-separator">//</span> Wellington, FL 33414 <span class="ft-separator">//</span> 561.503.9927</p>
				</div>
				<div class="column fourth taligncenter">
					
				</div>
			</footer>
			<div class="cart-count">
				<a href="/cart"><i class="fa fa-shopping-cart"></i> <?php if ( WC()->cart->get_cart_contents_count() != 0 ) { echo '<span class="cct">'.WC()->cart->get_cart_contents_count().'</span>'; } ?></a>
			</div>
			<?php wp_footer(); ?>
		</body>
		</html>