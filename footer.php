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

 	<span>( (845) 233-6563 ) © 2016 Proojo.com - 3979 Albany Post Road #615 Hyde Park, NY 12538 USA</span>   			

 	   	<!-- <ul class="list-inline">

 	   		<li><a href="">Blog</a></li>
 	   		<li><a href="">Login</a></li>
 	   		<li><a href="">Sign up</a></li>
 	   		<li><a href="">Terms of Service Privacy</a></li>
 	   		<span>Contact (855) 377-0335  © 2016 Projoo LLC</span>   		
 	   		
 	   	</ul> -->
	  </footer>

	  <div class="text-center social-icons-footer">
	  	<?php echo do_shortcode( '[social4i size="small"]' ); ?>
	  </div>

</div>
    <!-- /wrap -->

<?php wp_footer(); ?>

</body>
</html>



 <script>

        var templateDir = "<?php bloginfo('template_directory') ?>";
    </script>

    <?php get_template_part( 'includes/modal-form' ); ?>


<script>
(function(i,s,o,g,r,a,m),i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-73414426-1', 'auto');
ga('send', 'pageview');

</script>