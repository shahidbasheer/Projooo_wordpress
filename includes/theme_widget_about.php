<?php 

/**
 * new WordPress Widget format
 * Wordpress 2.8 and above
 * @see http://codex.wordpress.org/Widgets_API#Developing_Widgets
 */






class Projo_about_Widget extends WP_Widget {

    /**
     * Constructor
     *
     * @return void
     **/

  


     function Projo_about_Widget() {
        $widget_ops = array('classname' => 'Projo_about_Widget column', 'description' => __( "Projo_about_Widget.", '_tk') );
        $this->WP_Widget('Projo_about_Widget', __('Projo about Widget', '_tk'), $widget_ops);
    }
    
    /**
     * Outputs the HTML for this widget.
     *
     * @param array  An array of standard parameters for widgets in this theme
     * @param array  An array of settings for this widget instance
     * @return void Echoes it's output
     **/
    function widget( $args, $instance ) {
        extract( $args, EXTR_SKIP );
        echo $before_widget;
        echo $before_title;
        //echo 'Title'; // Can set this with a widget option, or omit altogether
        echo $after_title;

        ?>
        
            <!-- About Projoo -->
        	<div class="about">
                 
                 <h5 class="blue-text"><?php echo esc_textarea( $instance['heading_about_us'] ); ?></h5>
                
                 <p><?php echo esc_textarea( $instance['about_us_text'] ); ?></p>
                 <a href="" class="btn btn-green" data-toggle="modal" data-target="#modal-form">Request for Early Access</a>
            </div>

         <?php 


    //
    // Widget display logic goes here
    //

    echo $after_widget;
    }

    /**
     * Deals with the settings when they are saved by the admin. Here is
     * where any validation should be dealt with.
     *
     * @param array  An array of new settings as submitted by the admin
     * @param array  An array of the previous settings
     * @return array The validated and (if necessary) amended settings
     **/
    function update( $new_instance, $old_instance ) {

                // update logic goes here
        $instance = array();
        $instance['heading_about_us'] = ( ! empty( $new_instance['heading_about_us'] ) ) ? strip_tags( $new_instance['heading_about_us'] ) : '';
        $instance['about_us_text'] = ( ! empty( $new_instance['about_us_text'] ) ) ? strip_tags( $new_instance['about_us_text'] ) : '';
        
        return $instance;
    }

    /**
     * Displays the form for this widget on the Widgets page of the WP Admin area.
     *
     * @param array  An array of the current settings for this widget
     * @return void Echoes it's output
     **/
    function form( $instance ) {
        $heading_about_us = ! empty( $instance['heading_about_us'] ) ? $instance['heading_about_us'] : __( 'About Us', '_tk' );
        $about_us_text = ! empty( $instance['about_us_text'] ) ? $instance['about_us_text'] : __( 'Abouts about_us_text', '_tk' );
        

        ?>
                <p>
                    <label for="<?php echo $this->get_field_id( 'heading_about_us' ); ?>"><?php _e('heading_about_us', '_tk'); ?></label> 
                    <textarea rows="4" cols="30" class="widefat" id="<?php echo $this->get_field_id('heading_about_us'); ?>" name="<?php echo $this->get_field_name('heading_about_us'); ?>"><?php echo esc_textarea( $heading_about_us ); ?></textarea>                    
                </p>

                <p>
                    <label for="<?php echo $this->get_field_id( 'about_us_text' ); ?>"><?php _e('Description', '_tk'); ?></label> 
                    <textarea rows="4" cols="30" class="widefat" id="<?php echo $this->get_field_id('about_us_text'); ?>" name="<?php echo $this->get_field_name('about_us_text'); ?>"><?php echo esc_textarea( $about_us_text ); ?></textarea>                    
                </p>


        <?php
    }
}

add_action( 'widgets_init', create_function( '', "register_widget( 'Projo_about_Widget' );" ) );