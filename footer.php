<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _tk
 */
?>			

			 </div> <!-- row -->

			</div><!-- blog .*-inner (main-content or sidebar, depending if sidebar is used) -->
	
 <footer class="site-footer">


 	<!-- The WordPress Menu goes here -->
 	<?php wp_nav_menu(
 		array(
 			'theme_location' 	=> 'footer',
 			'depth'             => 2,
 			'container'         => 'div',
 			'container_class'   => 'inline-block',
 			'menu_class' 		=> 'list-inline',
 			'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
 			'menu_id'			=> 'main-menu',
 			
 		)
 	); ?>

 	<span>Contact Us ( (845) 233-6563 ) © 2016 Proojo.com - 3979 Albany Post Road #615 Hyde Park, NY 12538 USA</span>   			

 	   	<!-- <ul class="list-inline">

 	   		<li><a href="">Blog</a></li>
 	   		<li><a href="">Login</a></li>
 	   		<li><a href="">Sign up</a></li>
 	   		<li><a href="">Terms of Service Privacy</a></li>
 	   		<span>Contact (855) 377-0335  © 2016 Projoo LLC</span>   		
 	   		
 	   	</ul> -->
	  </footer>

	  <p>
	  	<?php echo do_shortcode( '[social4i size="small" align="float-none"]' ); ?>
	  </p>

</div>
    <!-- /wrap -->

<?php wp_footer(); ?>

</body>
</html>

<style>
	.inline-block {
	display: inline-block;
}
</style>

 <script>
        var templateDir = "<?php bloginfo('template_directory') ?>";
    </script>