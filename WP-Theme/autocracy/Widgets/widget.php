<?php
/* Widget Name: Centered Text Widget
  Description: This widget allows you to place centered text on your homepage, it is only intended to be used in the homepage widget editor.
  Version: 1.0
  Author: Business On Market St
  Author URI: http://www.businessonmarketst.com
 */

class exampleWidget extends WP_Widget {

    function exampleWidget() {
        $widget_ops = array(
            'classname' => 'exampleWidget',
            'description' => 'An example widget of the autocracy API.'
        );

        $this->WP_Widget(
                'exampleWidget', 'Example Widget', $widget_ops
        );
    }

    function widget($args, $instance) { // widget sidebar output
        extract($args, EXTR_SKIP);

        /* Our variables from the widget settings. */
        $title = $instance['title'];
        $subtext = $instance['subtext'];

        echo $before_widget; // pre-widget code from theme
        // YOUR DISPLAY OUTPUT GOES HERE!!!!!!!

        echo '<div class="centered-text-widget">';
        echo '<div class="container">';
        echo '<h2>' . $title . '</h2>';
        echo '<p>' . $subtext . '</p>';
        echo '</div>';
        echo '</div>';

        echo $after_widget; // post-widget code from theme
    }

    /**
     * Update the widget settings.
     * */
    function update($new_instance, $old_instance) {
        $instance = $old_instance;

        /* Strip tags for title and name to remove HTML (important for text inputs). */
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['subtext'] = strip_tags($new_instance['subtext']);

        return $instance;
    }

    /**
     * Displays the widget settings controls on the widget panel.
     * Make use of the get_field_id() and get_field_name() function
     * when creating your form elements. This handles the confusing stuff.
     */
    function form($instance) {

        /* Set up some default widget settings. */
        $defaults = array('title' => __('title', 'example'), 'subtext' => __('subtext', 'example'),);
        $instance = wp_parse_args((array) $instance, $defaults);
        ?>

        <!-- Title: Text Input -->
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'hybrid'); ?></label>
            <input id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('subtext'); ?>"><?php _e('Subtext:', 'hybrid'); ?></label>
            <input id="<?php echo $this->get_field_id('subtext'); ?>" name="<?php echo $this->get_field_name('subtext'); ?>" value="<?php echo $instance['subtext']; ?>" style="width:100%;" />
        </p>

        <?php
    }

}

add_action(
        'widgets_init', create_function('', 'return register_widget("exampleWidget");')
);
?>