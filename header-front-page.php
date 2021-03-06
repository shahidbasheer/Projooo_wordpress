<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _tk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta property="fb:app_id" content="857483461027079"/>

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	
	<!-- Hotjar Tracking Code for http://www.proojo.com -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:149892,hjsv:5};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
</script>

</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>

 <nav class="navbar navbar-custom" role="navigation">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	 <div class="container-projoo">
					
					<div class="navbar-header">
					    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
					        <i class="fa fa-bars"></i>
					    </button>
					    <a class="navbar-brand page-scroll" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					        <img src="<?php echo  theme_root . '/'; ?>includes/img/logo.png">
					    </a>
					</div>

					<!-- The WordPress Menu goes here -->
					<?php wp_nav_menu(
						array(
							'theme_location' 	=> 'primary',
							'depth'             => 2,
							'container'         => 'div',
							'container_class'   => 'collapse navbar-collapse navbar-right navbar-main-collapse',
							'menu_class' 		=> 'nav navbar-nav',
							'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
							'menu_id'			=> 'main-menu',
							'walker' 			=> new wp_bootstrap_navwalker()
						)
					); ?>			
		
	</div><!-- .container -->
</nav><!-- .site-navigation -->

<div class="wrap">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>

 <div class="seprater-bottom-30"></div>
     	   <div class="headwrap">
	     	   	<img src="<?php echo  theme_root . '/'; ?>includes/img/banner-bg.png" class="banner-img center-block img-responsive" >
	     	   	
	     	   	
	     	   	<div class="headwrap__blue">
	     	   		<div class="container-projoo">
	     	   			<div class="row">
		     	   			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		     	   				<h1 class="m-b-10">One team, one dream, one vision</h1>
		     	   				<p class="m-b-20">Best tool for small size business, helps deliver good performance, thereby increasing productivity.</p>
		     	   					
		     	   					<form class="form-inline" action="<?php echo  theme_root . '/'; ?>includes/contact-form.php" method="POST" role="form" id="subForm-header">
		     	   						
		     	   						<div class="row">
		     	   							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 m-b-20">
		     	   								
		     	   									<input name="name" type="text" class="form-control" id="" placeholder="Full Name" required="required">
		     	   									<input name="bus_name" type="text" class="form-control" id="" placeholder="Business Name" required="required">
		     	   									<input name="email" type="email" class="form-control" id="" placeholder="Email Addresss" required="required">

		     	   							</div>
		     	   						</div>
		     	   						
		     	   					
		     	   						<button type="submit" class="btn btn-green">Request for Early Access</button>
		     	   					</form>

		     	   					<div class="notification">
    									<p></p>
    								</div>
		     	   			</div>
	     	   			</div>
	     	   		</div>
	     	   	</div> <!-- bluearea --> 
     	   </div> <!-- headwrap -->
	
		

