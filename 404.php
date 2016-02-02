<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package _tk
 */

get_header(); ?>

<div class="seprater-bottom-70"></div>

     	  <div class="container-projoo blog">
                 <div class="row">
                      <div class="col-xs-12 col-sm-7 col-md-8 col-lg-8">


	<?php // add the class "panel" below here to wrap the content-padder in Bootstrap style ;) ?>
	<section class="content-padder error-404 not-found">

		<header>
			<h2 class="page-title"><?php _e( 'Oops! Something went wrong here.', '_tk' ); ?></h2>
		</header><!-- .page-header -->

		<div class="page-content">

			<p><?php _e( 'Nothing could be found at this location. Maybe try a search?', '_tk' ); ?></p>

			<?php get_search_form(); ?>

		</div><!-- .page-content -->
	
	</section><!-- .content-padder -->
 </div> <!-- col-9 -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>