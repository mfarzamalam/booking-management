<?php
   include('common.php');
 
?>

<?php

$date = Date("d/m/Y");
$code = "function";
$fromm = $_POST['fromm'];
$chqno = $_POST['chqno'];
$bank = $_POST['bank'];
$amount = $_POST['amount'];

$strSQL="INSERT INTO `codemanager` (`fromm`,`chqno`,`bank`,`code`,`datee`,`amount`) VALUES 
                                    ('$fromm','$chqno','$bank','$code','$da','$date','$amount')";
$result = mysqli_query($connect,$strSQL);

header('location:codemanager.php');

?>

<head>

<script language="javascript">

setTimeout("self.close();",500)
//-->
</script> 
</head>