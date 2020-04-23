<?php
   include('common.php');
 
?>

<?php

$id = $_POST['id'];
$fromm = $_POST['fromm'];
$chqno = $_POST['chqno'];
$bank = $_POST['bank'];
$amount = $_POST['amount'];

$query = "UPDATE `codemanager` SET  `fromm`=('$fromm'), `chqno`=('$chqno'), `bank`=('$bank'), `amount`=('$amount') WHERE `id` =('$id')"; 
$result = mysqli_query($connect,$query);

header('location:codemanager.php');

?>

<head>

<script language="javascript">

setTimeout("self.close();",500)
//-->
</script> 
</head>