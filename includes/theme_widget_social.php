<?php 

/**
 * new WordPress Widget format
 * Wordpress 2.8 and above
 * @see http://codex.wordpress.org/Widgets_API#Developing_Widgets
 */






class Projo_social_Widget extends WP_Widget {

    /**
     * Constructor
     *
     * @return void
     **/

  


     function Projo_social_Widget() {
        $widget_ops = array('classname' => 'Projo_social_Widget column', 'description' => __( "Projo_social_Widget.", '_tk') );
        $this->WP_Widget('Projo_social_Widget', __('Projo Social Widget', '_tk'), $widget_ops);
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
        
        	<div class="social-widget">
                 <h5>Follow Us</h5>
                 <ul class="list-inline">
                     
                      <?php if ($instance['facebook_username'] != ""): ?>
                          <li><a href="http://www.facebook.com/<?php echo $instance['facebook_username'] ?>" class="fa fa-facebook-f"></a></li>
                      <?php endif ?>

                      <?php if ($instance['twitter_username'] != ""): ?>
                          <li><a href="http://www.facebook.com/<?php echo $instance['twitter_username'] ?>" class="fa fa-twitter"></a></li>
                      <?php endif ?>


                      <?php if ($instance['googleplus_username'] != ""): ?>
                          <li><a href="http://www.facebook.com/<?php echo $instance['googleplus_username'] ?>" class="fa fa-google-plus-square"></a></li>
                      <?php endif ?>


                      <?php if ($instance['pinterest_username'] != ""): ?>
                          <li><a href="http://www.facebook.com/<?php echo $instance['pinterest_username'] ?>" class="fa fa-pinterest"></a></li>
                      <?php endif ?>

                      
                 </ul>
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
        $instance['facebook_username'] = ( ! empty( $new_instance['facebook_username'] ) ) ? strip_tags( $new_instance['facebook_username'] ) : '';
        $instance['twitter_username'] = ( ! empty( $new_instance['twitter_username'] ) ) ? strip_tags( $new_instance['twitter_username'] ) : '';
        $instance['googleplus_username'] = ( ! empty( $new_instance['googleplus_username'] ) ) ? strip_tags( $new_instance['googleplus_username'] ) : '';
        $instance['pinterest_username'] = ( ! empty( $new_instance['pinterest_username'] ) ) ? strip_tags( $new_instance['pinterest_username'] ) : '';
        
        return $instance;
    }

    /**
     * Displays the form for this widget on the Widgets page of the WP Admin area.
     *
     * @param array  An array of the current settings for this widget
     * @return void Echoes it's output
     **/
    function form( $instance ) {
       
        $fb_heading = ! empty( $instance['fb_heading'] ) ? $instance['fb_heading'] : __( '', '_tk' );
        $facebook_username = ! empty( $instance['facebook_username'] ) ? $instance['facebook_username'] : __( '', '_tk' );
        $twitter_username = ! empty( $instance['twitter_username'] ) ? $instance['twitter_username'] : __( '', '_tk' );
        $googleplus_username = ! empty( $instance['googleplus_username'] ) ? $instance['googleplus_username'] : __( '', '_tk' );
        $pinterest_username = ! empty( $instance['pinterest_username'] ) ? $instance['pinterest_username'] : __( '', '_tk' );
        

        ?>
                <p>
                    <label for="<?php echo $this->get_field_id( 'facebook_username' ); ?>"><?php _e('Facebook User Name', '_tk'); ?></label> 
                    <input class="widefat m-t-b" type="text" id="<?php echo $this->get_field_id('facebook_username'); ?>" name="<?php echo $this->get_field_name('facebook_username'); ?>" value="<?php echo esc_attr( $facebook_username );?>" placeholder="Facebook Username">                   
                </p>

                 <p>
                    <label for="<?php echo $this->get_field_id( 'twitter_username' ); ?>"><?php _e('Twitter User Name', '_tk'); ?></label> 
                    <input class="widefat m-t-b" type="text" id="<?php echo $this->get_field_id('twitter_username'); ?>" name="<?php echo $this->get_field_name('twitter_username'); ?>" value="<?php echo esc_attr( $twitter_username );?>" placeholder="Twitter Username">                  
                </p>


                 <p>
                    <label for="<?php echo $this->get_field_id( 'googleplus_username' ); ?>"><?php _e('Google User Name', '_tk'); ?></label> 
                    <input class="widefat m-t-b" type="text" id="<?php echo $this->get_field_id('googleplus_username'); ?>" name="<?php echo $this->get_field_name('googleplus_username'); ?>" value="<?php echo esc_attr( $googleplus_username );?>" placeholder="G+ Username">                 
                </p>
                
                 <p>
                    <label for="<?php echo $this->get_field_id( 'pinterest_username' ); ?>"><?php _e('Pininterset User Name', '_tk'); ?></label> 
                    <input class="widefat m-t-b" type="text" id="<?php echo $this->get_field_id('pinterest_username'); ?>" name="<?php echo $this->get_field_name('pinterest_username'); ?>" value="<?php echo esc_attr( $pinterest_username );?>" placeholder="Pinterest Username">               
                </p>
                

        <?php


        // display field names here using:
        // $this->get_field_id( 'option_name' ) - the CSS ID
        // $this->get_field_name( 'option_name' ) - the HTML name
        // $instance['option_name'] - the option value
    }
}

add_action( 'widgets_init', create_function( '', "register_widget( 'Projo_social_Widget' );" ) );

?> 

