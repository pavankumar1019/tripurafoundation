<?php

         $to = "mvk85126@gmail.com";
         $subject = "Tripura Foundation";
         
         $message = "<h1>Hi Iam ".$_POST['u_name']."</h1>";
         $message .= "<h2>Contact : <span style='color:blue;'>".$_POST['contact']."</span> </h2>";
         $message .= "<b>".$_POST['message']."</b>";
         
         $header = "From:info@pkwebdev.com \r\n";
         $header .= "Cc:info@pkwebdev.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      ?>