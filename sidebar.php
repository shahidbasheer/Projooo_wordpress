<?php
/**
 * The sidebar containing the main widget area
 *
 * @package _tk
 */
?>

	

	 <!--   =================sidebar===================      -->
     </div> <!-- col-9 -->     
     <div class="col-xs-12 col-sm-5 col-md-4 col-lg-4">

		<?php // add the class "panel" below here to wrap the sidebar in Bootstrap style ;) ?>
		<div class="sidebar">

			<?php //do_action( 'before_sidebar' ); ?>
				<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
									

			<?php endif; ?>

		 </div> <!-- sidebar -->
                           
       </div> <!-- col-md-4 -->

    

