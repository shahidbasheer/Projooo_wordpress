<?php
/*
Plugin Name: Projoo list Categories

*/

/**
 * List Categories Widget Class
 */
class list_categories_widget extends WP_Widget {
 
 
    /** constructor -- name this the same as the class above */
    function list_categories_widget() {
        parent::WP_Widget(false, $name = 'Projo List Categories');
    }
 
	/** @see WP_Widget::widget -- do not rename this */
	function widget($args, $instance) {
		extract( $args );
		$title 		= apply_filters('widget_title', $instance['title']); // the widget title
		$number 	= $instance['number']; // the number of categories to show
		$taxonomy 	= $instance['taxonomy']; // the taxonomy to display
				
		$args = array(
			'number' 	=> $number,
			'taxonomy'	=> 'category'
		);
		
		// retrieves an array of categories or taxonomy terms
		$cats = get_categories($args);
		
		?>
			  <div class="catagries">
			     <header>
			          <h5><?php echo $title; ?></h5>
			     </header>
			     <div class="content">
			          <ul class="list-unstyled">

							
								<?php foreach($cats as $cat) { ?>
										
										<?php  //var_dump(get_term_link($cat->slug, $taxonomy));  ?>
										<?php $catlist = get_term_link($cat->slug, $taxonomy); ?>
										
										<?php if  ( is_wp_error(  $catlist  ) ): ?>
										
											<li><a href="<?php echo get_term_link($cat->slug, $taxonomy); ?>" title="<?php sprintf( __( "View all posts in %s" ), $cat->name ); ?>"><?php echo $cat->name ?> (<span class="count"><?php echo $cat->category_count; ?></span>)</a></li>
										
										<?php else: ?>
											<p>No Categories!</p>
										
										<?php endif ?>
										
		
								<?php } ?>
							
					
						</ul>
			     </div>
			</div> <!-- catagries -->
			  
		<?php
	}
 
	/** @see WP_Widget::update -- do not rename this */
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		$instance['title'] = ! empty( $instance['title'] ) ? $instance['title'] : __( 'Other Categories', '_tk' );
		
		$instance['number'] = strip_tags($new_instance['number']);
		
		return $instance;
	}
 
    /** @see WP_Widget::form -- do not rename this */
    function form($instance) {
 
        $title 		= esc_attr($instance['title']);
        $number		= esc_attr($instance['number']);
        $exclude	= esc_attr($instance['exclude']);
        
        ?>
         <p>
          <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $instance['title']; ?>" />
        </p>
		<p>
          <label for="<?php echo $this->get_field_id('number'); ?>"><?php _e('Number of categories to display'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('number'); ?>" name="<?php echo $this->get_field_name('number'); ?>" type="text" value="<?php echo $instance['number']; ?>" />
        </p>
		
        <?php
    }
 
 
} // end class list_categories_widget
add_action('widgets_init', create_function('', 'return register_widget("list_categories_widget");'));
?>