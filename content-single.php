<?php
/**
 * @package _tk
 */
?>


                          <article class="single-post">
                               <a href="<?php echo esc_url( home_url( '/' ) ); ?>/blog" class="back-tp-home-page">Back to Blog Home Page</a>
                              <header>

                              	<?php the_title( sprintf( '<h2 class="page-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                                    
                                    <div class="entry-meta">                                    
                                         <span class="auther">	<?php _tk_posted_on(); ?></span>
                                         <!-- <img src="<?php// echo  theme_root . '/'; ?>includes/img/social-icon.png"> -->
                                    </div>
                              </header>

                                
                              <div class="entry-content">

                                  <?php if ( has_post_thumbnail() ): ?>
                                    <div class="entry-content-thumbnail">
                                     <?php the_post_thumbnail(); ?>                                     
                                    </div>
                                  <?php endif ?>

                                    <?php the_content(); ?>


                                   
                              </div>

                                <div class="post-cta">
                                     <p><?php echo (get_post_custom_values('last-para')[0]);  ?></p>
                                     <button type="button" class="btn btn-green" data-toggle="modal" data-target="#modal-form">Request for Early Access</button>
                                  </div>
                              
                              <?php echo do_shortcode( '[fbcomments]' ); ?>
                              
                              <footer class="entry-meta">
          
                              </footer><!-- .entry-meta -->

                               

                           </article>
                     