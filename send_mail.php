<?php 
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  require 'PHPMailer-master/src/Exception.php';
  require 'PHPMailer-master/src/PHPMailer.php';
  require 'PHPMailer-master/src/SMTP.php';

  $mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";


$mail->SMTPDebug  = 1;  
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = "smtp.gmail.com";
$mail->Username   = "your-gmail@gmail.com";// Your GMAIL 
$mail->Password   = "Password"; // GMAIL PASSWORD
$mail->IsHTML(true);
$mail->AddAddress("syedqasim8888@gmail.com", "Syed Qasim Ahmed"); // RECIPIENTS ADDRESS
$mail->SetFrom("syedqasim8888@gmail.com", "Qasim"); // FROM ADDRESS
//$mail->AddReplyTo("reply-to-email@domain", "reply-to-name"); // Reply to if any
//$mail->AddCC("cc-recipient-email@domain", "cc-recipient-name");  // CC 
$mail->Subject = "Test is Test Email sent via Gmail SMTP Server using PHP Mailer";
$content = "<b>This is a Test Email sent via Gmail SMTP Server using PHP mailer class.</b>";


$mail->MsgHTML($content); 
if(!$mail->Send()) {
  echo "Error while sending Email.";
 // var_dump($mail);
} else {
  echo "Email sent successfully";
}
?>