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
                              <p class="font-32">Contact Us. We Love Your Feedback .</p>
                              <p class="m-b-20 font-18">We’re always happy to help! feel free to send us a message anytime.</p>
                              <ul class="list-inline">
                                   <li><i class="glyphicon glyphicon-envelope"></i>web@proojo.com </li>
                                   <li><i class="glyphicon glyphicon-earphone"></i> (845) 233-6563</li>
                              </ul>
                         </div>


                        
                           <div class="contact-us__form m-b-30">
                                <?php the_content(); ?>
                           </div>
                         

                          <div class="contact-us__address">
                              <p>Proojo.com - 3793 Albany Post Road <br> 615 Hyde Park, NY 12538 USA</p>
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

