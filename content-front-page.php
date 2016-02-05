<?php
/**
 * Template Name: home-front-page
 *
 * @package _tk
 */
?>
<?php get_header('front-page'); ?>
        <!-- @include html_Moudles/header.html -->

		
     	

		<?php 
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post(); 
				//
				the_content();
				//
			} // end while
		} // end if
		?>

     	  
		
		
         <!-- @include html_Moudles/footer.html -->
<?php get_footer( ); ?>