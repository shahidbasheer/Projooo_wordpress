<?php
/**
 * 
 *
 * @package _tk
 */
?>

        <!-- @include html_Moudles/header.html -->

        <div class="seprater-bottom-70"></div>
               
                  <div class="contact-us">
               

                         
                         <div class="intoro">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, illum.</p>
                              <ul class="list-inline">
                                   <li>example@example.com</li>
                                   <li>+0978797498273498</li>
                              </ul>
                         </div>


                        
                           <div class="contact-us__form m-b-30">
                                <?php the_content(); ?>
                           </div>
                         

                          <div class="contact-us__address">
                              <p>Proojo.co - 3793 Albany Post Road <br> #615 Hyde Park, NY 12538 USA</p>
                         </div>
                        
                           

                            <section class="container-projoo cta-2">
                              <h2 class="center-block m-b-30">Try Proojo – Maximum visibility with minimum clutter of tasks.</h2>
                              <img src="http://www.proojo.com/wp-content/themes/projoo_theme/includes/img/arrow-left-bottom.png" class="arrow hidden-xs">
                              <button type="button" class="btn btn-green" data-toggle="modal" data-target="#modal-form">Request for Early Access</button>
                              
                            </section>

                 </div>
	
     	  <?php get_template_part( 'includes/modal-form' ); ?>
</div>
</div>
         <!-- @include html_Moudles/footer.html -->

