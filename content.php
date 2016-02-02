<?php
/**
 * @package _tk
 */
?>

                         

                           <article class="single-post archive">
                                                          
                             <header>
                                <?php the_title( sprintf( '<h2 class="page-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                                    
                                    <div class="entry-meta">                                    
                                         <span class="auther">  <?php _tk_posted_on(); ?></span>
                                         <img src="<?php echo  theme_root . '/'; ?>includes/img/social-icon.png">
                                    </div>
                              </header>

                                
                             

                              <?php if ( is_search() || is_archive() ) : // Only display Excerpts for Search and Archive Pages ?>
                              <div class="entry-content">
                                <div class="entry-content-thumbnail">
                                    <?php the_post_thumbnail(); ?>                                     
                                </div>

                                <?php the_excerpt(); ?>
                              </div><!-- .entry-summary -->
                              <?php else : ?>
                              <div class="entry-content">

                                <div class="entry-content-thumbnail">
                                    <?php the_post_thumbnail(); ?>                                     
                                   </div>

                                <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', '_tk' ) ); ?>
                                <?php
                                  wp_link_pages( array(
                                    'before' => '<div class="page-links">' . __( 'Pages:', '_tk' ),
                                    'after'  => '</div>',
                                  ) );
                                ?>
                              </div><!-- .entry-content -->
                              <?php endif; ?>

                              
                              
                              <footer class="entry-meta">
          
                              </footer><!-- .entry-meta -->

                           </article>
                      