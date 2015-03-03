<?php

//Field Definition Functions

function autoc_def_textfield($optioname, $id) {

	$option = get_option($optioname);

	echo '<input type="text" size="36" ';
	echo 'name='.$optioname. '['. $id .'] ';
	echo 'value="'.__($option[$id]).'" />'; 
}

function autoc_def_checkbox($optioname, $id) {

        $option = get_option($optioname);

        echo '<input type="checkbox" size="36" ';
        echo 'name='.$optioname. '['. $id .'] ';
        echo 'value="1" '; 
        checked('1', $option[$id]);
        echo '/>';
}

function autoc_def_textarea($optioname, $id) {

	$option = get_option($optioname);

	echo '<textarea size="36" ';
	echo 'name='.$optioname. '['. $id .'] ';
	echo '>';
	echo __($option[$id]);
	echo '</textarea>'; 
}

function autoc_def_uploadarea($optioname, $id) {

        $option = get_option($optioname);

        echo '<input class="upload_image" type="text" size="36" ';
        echo 'name='.$optioname. '['. $id .'] ';
        echo 'value="'.__($option[$id]).'" />'; 
        echo '<input class="upload_image_button" type="button" value="Upload Image" />';
}

//Accessor Functions

function autoc_get_img($id, $class) {
        global $wpdb;
        $images = get_post_meta( get_the_ID(), $id, false);
        $images = implode( ',' , $images );
        $images = $wpdb->get_col( "
                SELECT ID FROM {$wpdb->posts}
                WHERE post_type = 'attachment'
                AND ID in ({$images})
                ORDER BY menu_order ASC
                " );

        foreach ( $images as $att )
        {
                $src = wp_get_attachment_image_src( $att, 'full' );
                $src = $src[0];
                echo "<img alt='image' src='".$src."' class='".$class."'' />";
        }

}

function autoc_get_postdata($id) {
        global $wpdb;
        $postdata = get_post_meta( get_the_ID(), $id, false );
        return $postdata[0];
}

?>