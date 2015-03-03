<?php

$form = '<form role="search" method="get" id="searchform" action="' . esc_url( home_url( '/'  ) ) . '">
	<div>
		<label class="screen-reader-text" for="s" style="display: none;">' . __( '', 'woocommerce' ) . '</label>
		<input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="' . __( 'type your search...', 'woocommerce' ) . '" />
		<button value="'. esc_attr__( 'Go', 'woocommerce' ) .'" ><i class="fa fa-search"></i></button>
		<input type="hidden" name="post_type" value="product" />
	</div>
</form>';

echo $form;