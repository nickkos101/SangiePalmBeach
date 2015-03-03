<?php

$prefix = 'YOUR_PREFIX_';
global $meta_boxes;
$meta_boxes = array();

$meta_boxes[] = array(
    'id' => 'Megamenu',
    'title' => 'Mega Menu Assignments',
    'pages' => array('megamenu'),
    'context' => 'normal',
    'priority' => 'high',
    'fields' => array(
       array(
        'name' => 'Assign to Whats New Megamenu?',
        'id' => 'whatsnew-megamenu',
        'type' => 'checkbox',
        ),
       array(
        'name' => 'Assign to Shop Megamenu?',
        'id' => 'shop-megamenu',
        'type' => 'checkbox',
        ),
       array(
        'name' => 'Assign to Look Books Megamenu?',
        'id' => 'lookbooks-megamenu',
        'type' => 'checkbox',
        ),
       array(
        'name' => 'Assign to Blog Megamenu?',
        'id' => 'blog-megamenu',
        'type' => 'checkbox',
        ),
       array(
        'name' => 'Assign to Accounts Megamenu?',
        'id' => 'account-megamenu',
        'type' => 'checkbox',
        ),
       ),
    );

$meta_boxes[] = array(
    'id' => 'slider',
    'title' => 'Slide Settings',
    'pages' => array('slider'),
    'context' => 'normal',
    'priority' => 'high',
    'fields' => array(
       array(
        'name' => 'Sub Title',
        'id' => 'subtitle',
        'type' => 'text',
        ),
       array(
        'name' => 'Description',
        'id' => 'desc',
        'type' => 'text',
        ),
       array(
        'name' => 'Link',
        'id' => 'link',
        'type' => 'text',
        ),
       array(
        'name' => 'Background Color',
        'id' => 'bgcolor',
        'type' => 'color',
        ),
       array(
        'name' => 'Caption Alignment',
        'id' => 'capalignment',
        'type' => 'select',
        'options' => array(
            'left' => 'left',
            'center' => 'center',
            'right' => 'right'
            ),
        ),
       array(
        'name' => 'Image Alignment',
        'id' => 'imgalignment',
        'type' => 'select',
        'options' => array(
            'left' => 'left',
            'center' => 'center',
            'right' => 'right'
            ),
        ),
       array(
        'name' => 'Background Size',
        'id' => 'bgsize',
        'type' => 'select',
        'options' => array(
            'cover' => 'cover',
            'contain' => 'contain'
            ),
        ),
       ),
);

$meta_boxes[] = array(
    'id' => 'slider-2',
    'title' => 'Slide Settings',
    'pages' => array('slider-2'),
    'context' => 'normal',
    'priority' => 'high',
    'fields' => array(
       array(
        'name' => 'Sub Title',
        'id' => 'subtitle',
        'type' => 'text',
        ),
       array(
        'name' => 'Description',
        'id' => 'desc',
        'type' => 'text',
        ),
       array(
        'name' => 'Link',
        'id' => 'link',
        'type' => 'text',
        ),
       array(
        'name' => 'Background Color',
        'id' => 'bgcolor',
        'type' => 'color',
        ),
       array(
        'name' => 'Caption Alignment',
        'id' => 'capalignment',
        'type' => 'select',
        'options' => array(
            'left' => 'left',
            'center' => 'center',
            'right' => 'right'
            ),
        ),
       array(
        'name' => 'Image Alignment',
        'id' => 'imgalignment',
        'type' => 'select',
        'options' => array(
            'left' => 'left',
            'center' => 'center',
            'right' => 'right'
            ),
        ),
       array(
        'name' => 'Background Size',
        'id' => 'bgsize',
        'type' => 'select',
        'options' => array(
            'cover' => 'cover',
            'contain' => 'contain'
            ),
        ),
       ),
);

$meta_boxes[] = array(
    'id' => 'retailers',
    'title' => 'Retailer Info',
    'pages' => array('retailers'),
    'context' => 'normal',
    'priority' => 'high',
    'fields' => array(
       array(
        'name' => 'Street Address',
        'id' => 'address-1',
        'type' => 'text',
        ),
       array(
        'name' => 'Suite, Apt. # or Unit',
        'id' => 'address-2',
        'type' => 'text',
        ),
       array(
        'name' => 'City',
        'id' => 'city',
        'type' => 'text',
        ), 
       array(
        'name' => 'State',
        'id' => 'state',
        'type' => 'text',
        ),  
       array(
        'name' => 'Zip Code',
        'id' => 'zip',
        'type' => 'text',
        ),   
       array(
        'name' => 'Website',
        'id' => 'url',
        'type' => 'text',
        ),          
       ),
    );

$meta_boxes[] = array(
    'id' => 'lookbooks',
    'title' => 'Lookbook Info',
    'pages' => array('lookbooks'),
    'context' => 'normal',
    'priority' => 'high',
    'fields' => array(
       array(
        'name' => 'Lookbook Link',
        'id' => 'lookbook-url',
        'type' => 'text',
        ),         
       ),
    );

$meta_boxes[] = array(
    'id' => 'videos',
    'title' => 'Video Info',
    'pages' => array('videos'),
    'context' => 'normal',
    'priority' => 'high',
    'fields' => array(
       array(
        'name' => 'Vimeo ID',
        'id' => 'vimeo-id',
        'type' => 'text',
        ),  
       array(
        'name' => 'Youtube ID',
        'id' => 'youtube-id',
        'type' => 'text',
        ),       
       ),
    );
/* * ******************* META BOX REGISTERING ********************** */

/**
 * Register meta boxes
 *
 * @return void
 */
function YOUR_PREFIX_register_meta_boxes() {
    global $meta_boxes;

    // Make sure there's no errors when the plugin is deactivated or during upgrade
    if (class_exists('RW_Meta_Box')) {
        foreach ($meta_boxes as $meta_box) {
            new RW_Meta_Box($meta_box);
        }
    }
}

// Hook to 'admin_init' to make sure the meta box class is loaded before
// (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action('admin_init', 'YOUR_PREFIX_register_meta_boxes');
?>