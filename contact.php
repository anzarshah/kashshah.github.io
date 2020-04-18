<?php
    $name = $_POST['name'];
    $visitor_email =$_POST['email'];
    $message = $_POST['message'];


    $email_from = 'kashmirtourism.com';

    $email_subject = "new text";

        $email_body = "User name : $name. \n".
                       "User email $visitor_email.\n".
                         "User message $message. \n";
        $to = "anzarshah43@gmail.com";
        
        $header = "From : $email_from \r\n"; 
         $header = "Reply-to : $visitor_email \r\n";                 
                
        mail($to,$email_subject,$email_body,$header);
        
     header("Location: form.html");        

?>