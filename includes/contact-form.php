<?php

      require_once 'vendor/autoload.php';
      use MailerLite\Campaigns;
      // $campaigns = new Campaigns('934f72f4e4cc944c54f3f1d7942f979a');
      // $all = $campaigns->getAll();

       // from the form
       $name = trim(strip_tags($_POST['name']));
       $email = trim(strip_tags($_POST['email']));
       $bus_name = htmlentities($_POST['bus_name']);
       

         if (empty($name) || empty($email) || empty($bus_name) ) {
           $success = false;
            return $success;
          }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
             $success = false;
              return $success; 
          }

      $ML_Subscribers = new MailerLite\Subscribers( '934f72f4e4cc944c54f3f1d7942f979a' );

      $subscriber = array(
          'name' =>  $name ,
          'email' => $email ,          
          'fields' => array( 
             array( 'name' => 'bus_name', 'value' =>  $bus_name  )             
          )
      );

      if ( $subscriber = $ML_Subscribers->setId( '3234849' )->add( $subscriber ) ) {
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