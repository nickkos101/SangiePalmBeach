<?php
/* Creates the Theme Options Page */

function main_theme_options_do_page() {
    wp_enqueue_script('media-upload');
    wp_enqueue_script('thickbox');
    wp_enqueue_script('jquery');
    wp_enqueue_style('thickbox');
    wp_enqueue_style( 'style-name', get_template_directory_uri().'/autocracy/admin.css' );
    wp_enqueue_script('upload_enable', get_template_directory_uri() . '/autocracy/theme-options.js', false, null);
    ?>
    <div class="wrap">
        <?php
        screen_icon();
        echo "<h2>" . wp_get_theme() . __(' Theme Manager', 'sampletheme') . "</h2>";
        ?>
        <?php if (isset($_REQUEST['settings-updated'])) : ?>
        <div class="updated fade"><p><strong><?php _e('Options saved', 'sampletheme'); ?></strong></p></div>
    <?php endif; ?>

    <form method="post" action="options.php">
     <?php
     settings_fields('main_options');
     $optionname= 'main_theme_options';
     $mainoptions = get_option($optionname);
     ?>
     <div class="module-fullwidth">
        <h2>Homepage Options</h2>
        <h3>Featured Video Options</h3>
        <p>
            <label>Video Link - MP4</label>
            <?php autoc_def_textfield($optionname, 'vidLinkMp4'); ?>
        </p>
        <p>
            <label>Video Link - WEBM</label>
            <?php autoc_def_textfield($optionname, 'vidLinkwebM'); ?>
        </p>
        <p>
            <label>Video Overlay - Title</label>
            <?php autoc_def_textfield($optionname, 'vidTitle'); ?>
        </p>
        <p>
            <label>Video Overlay - Content</label>
            <?php autoc_def_textarea($optionname, 'vidContent'); ?>
        </p>
        <p>
            <label>Video Overlay - Button Text</label>
            <?php autoc_def_textfield($optionname, 'vidButtonText'); ?>
        </p>
        <p>
            <label>Video Overlay - Button Link</label>
            <?php autoc_def_textfield($optionname, 'vidButtonLink'); ?>
        </p>
    </div>
    <p class="submit">
        <input type="submit" class="button-primary" value="<?php _e('Save Options', 'sampletheme'); ?>" />
    </p>
</form>

</div>
<?php
}

function main_theme_options_validate($input) {
    global $select_options, $radio_options;
    // Our checkbox value is either 0 or 1
    if (!isset($input['option1']))
        $input['option1'] = null;
    $input['option1'] = ( $input['option1'] == 1 ? 1 : 0 );
    // Say our text option must be safe text with no HTML tags
    $input['sometext'] = wp_filter_nohtml_kses($input['sometext']);
    // Our select option must actually be in our array of select options
    // Say our textarea option must be safe text with the allowed tags for posts
    $input['sometextarea'] = wp_filter_post_kses($input['sometextarea']);
    return $input;
}
?>