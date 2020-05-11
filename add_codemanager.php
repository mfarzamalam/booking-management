<?php
   include('common.php');
 
?>

<?php

$date = Date("d/m/Y");
$fromm = $_POST['fromm'];
$chqno = $_POST['chqno'];
$bank = $_POST['bank'];
$amount = $_POST['amount'];

function generatePassword($passwordLength){
   $permitted_chars  = "cgkmpwrtEFHsVX123456789";
    $input_length = strlen($permitted_chars);
    $random_string = '';
    for($i = 0; $i < $passwordLength; $i++) {
        $random_character = $permitted_chars [mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }
 
    return $random_string;
 
 }

$code = generatePassword(4);
$strSQL="INSERT INTO `codemanager` (`fromm`,`chqno`,`bank`,`code`,`datee`,`amount`) VALUES 
                                    ('$fromm','$chqno','$bank','$code','$date','$amount')";
$result = mysqli_query($connect,$strSQL);

echo mysqli_error($connect);
header('location:codemanager.php');

?>

<head>

<script language="javascript">

setTimeout("self.close();",500)
//-->
</script> 
</head>