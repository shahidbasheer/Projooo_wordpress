<?php

      require_once 'vendor/autoload.php';
      use MailerLite\Campaigns;
      // $campaigns = new Campaigns('934f72f4e4cc944c54f3f1d7942f979a');
      // $all = $campaigns->getAll();

       // from the form
       
       $email = trim(strip_tags($_POST['email']));
       
       


      $ML_Subscribers = new MailerLite\Subscribers( '934f72f4e4cc944c54f3f1d7942f979a' );

      $subscriber = array(
          
          'email' => $email          
          
      );

      if ( $subscriber = $ML_Subscribers->setId( '3243741' )->add( $subscriber ) ) {
       $success = true; 
      } else {
        $success = false; 
      }
      

      
      // Response to ajax
      if ($success){
         echo "success";
      }else{
          echo "invalid";
      }
?>