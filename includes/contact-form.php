<?php
       // from the form
       $name = trim(strip_tags($_POST['name']));
       $email = trim(strip_tags($_POST['email']));
       $message = htmlentities($_POST['message']);

       echo = "success"
      
      // redirect to success page
      if ($success){
         echo "success";
      }else{
          echo "invalid";
      }
?>