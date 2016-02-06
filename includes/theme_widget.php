<?php 

/**
 * new WordPress Widget format
 * Wordpress 2.8 and above
 * @see http://codex.wordpress.org/Widgets_API#Developing_Widgets
 */
class Projo_search_Widget extends WP_Widget {

    /**
     * Constructor
     *
     * @return void
     **/
    //  public function __construct() {
        
   
    function Projo_search_Widget() {
		$widget_ops = array('classname' => 'Projo_search_Widget column', 'description' => __( "Projo_search_Widget.", '_tk') );
		$this->WP_Widget('Projo_search_Widget', __('Projo Search Widget', '_tk'), $widget_ops);
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
        
        	<div class="search-box">
                <!-- Subscribe to Our Newsletter and Other tih5es for Business -->
        	     <h5><?php echo $instance['heading']; ?></h5>
        	     <form id="blog-sub-form" action="<?php echo  theme_root . '/'; ?>includes/contact-form-blog.php" method="POST">
                      <div class="form-group">
                           <input class="form-control" name="email" required="required">
                      </div>
                      <button type="submit" href="" class="btn btn-green" id="blog-sub-form-btn"><?php echo $instance['buttonLabel']; ?></button>   
                      
                 </form>
                 <div class="notification blog-form">
                                        <p></p>
                    </div>
        	</div> <!-- search-box -->
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
        $instance['heading'] = ( ! empty( $new_instance['heading'] ) ) ? strip_tags( $new_instance['heading'] ) : '';
        $instance['buttonLabel'] = ( ! empty( $new_instance['buttonLabel'] ) ) ? strip_tags( $new_instance['buttonLabel'] ) : '';
        return $instance;
    }

    /**
     * Displays the form for this widget on the Widgets page of the WP Admin area.
     *
     * @param array  An array of the current settings for this widget
     * @return void Echoes it's output
     **/
    function form( $instance ) {
       
        $heading = ! empty( $instance['heading'] ) ? $instance['heading'] : __( 'Subscribe to Our Newsletter and Other News for Business', '_tk' );
        $buttonLabel = ! empty( $instance['buttonLabel'] ) ? $instance['buttonLabel'] : __( 'Subscribe to Newsletters', '_tk' );
        

        ?>
                </p>
                    <label for="<?php echo $this->get_field_id( 'heading' ); ?>"><?php _e('Heading', '_tk'); ?></label> 
                    <textarea rows="4" cols="30" class="widefat" id="<?php echo $this->get_field_id('heading'); ?>" name="<?php echo $this->get_field_name('heading'); ?>"><?php echo esc_textarea( $heading ); ?></textarea>                    
                </p>

                </p>
                    <label for="<?php echo $this->get_field_id( 'buttonLabel' ); ?>"><?php _e('buttonLabel', '_tk'); ?></label> 
                    <textarea rows="4" cols="30" class="widefat" id="<?php echo $this->get_field_id('buttonLabel'); ?>" name="<?php echo $this->get_field_name('buttonLabel'); ?>"><?php echo esc_textarea( $buttonLabel ); ?></textarea>                    
                </p>


        <?php

        // display field names here using:
        // $this->get_field_id( 'option_name' ) - the CSS ID
        // $this->get_field_name( 'option_name' ) - the HTML name
        // $instance['option_name'] - the option value
    }
}

add_action( 'widgets_init', create_function( '', "register_widget( 'Projo_search_Widget' );" ) );



