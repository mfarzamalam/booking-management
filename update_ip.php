<?php
 include('common.php');
?>

<?php

$id = $_GET['id'];
$ip = $_GET['ip'];

$strSQL = "UPDATE `ip` SET  `ip`=('$ip') WHERE `id`=('$id')"; 

$result = mysqli_query($connect,$strSQL);

if ($result){

    header('location:admin.asp'); 

}

?>

<head>

<script language="javascript">

setTimeout("self.close();",500)
//-->
</script> 
</head>