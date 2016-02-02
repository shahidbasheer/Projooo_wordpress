<?php
/**
 * @package _tk
 */
?>


                          <article class="single-post">
                               
                              <header>
                              	<?php the_title( sprintf( '<h2 class="page-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                                    
                                    <div class="entry-meta">                                    
                                         <span class="auther">	<?php _tk_posted_on(); ?></span>
                                         <!-- <img src="<?php// echo  theme_root . '/'; ?>includes/img/social-icon.png"> -->
                                    </div>
                              </header>

                                
                              <div class="entry-content">

                                   <div class="entry-content-thumbnail">
                                    <?php the_post_thumbnail(); ?>                                     
                                   </div>

                                    <?php the_content(); ?>
                                   
                              </div>

                              
                              <footer class="entry-meta">
          
                              </footer><!-- .entry-meta -->

                           </article>
                     