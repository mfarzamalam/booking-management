<?php 
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  require 'PHPMailer-master/src/Exception.php';
  require 'PHPMailer-master/src/PHPMailer.php';
  require 'PHPMailer-master/src/SMTP.php';

 
function send_mail($subject, $content,$recepicent ,$recepicent_name ){  

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Mailer = "smtp";

    $mail->SMTPDebug  = false;  
    $mail->SMTPAuth   = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Port       = 587;
    $mail->Host       = "smtp.gmail.com";
    $mail->Username   = "your-mail@gmail.com";// Your GMAIL 
    $mail->Password   = "password"; // GMAIL PASSWORD
    $mail->IsHTML(true);
    $mail->AddAddress($recepicent, $recepicent_name); // RECIPIENTS ADDRESS
    $mail->SetFrom("fahad@pagespak.com", "MNM"); // FROM ADDRESS
    //$mail->AddReplyTo("reply-to-email@domain", "reply-to-name"); // Reply to if any
    //$mail->AddCC("cc-recipient-email@domain", "cc-recipient-name");  // CC 
    $mail->Subject = $subject;
   
    
    $mail->MsgHTML($content); 
    if(!$mail->Send()) {
        var_dump($mail);
   
        return    "Error while sending Email.";
    } else {
        return      "Email sent successfully";
    }
     $string;   
  }

?>