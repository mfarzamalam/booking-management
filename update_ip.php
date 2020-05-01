<?php
 include('commonadmin.php');
?>

<?php

$id = $_POST['id'];
$ip = $_POST['ip'];

$strSQL = "UPDATE `ip` SET  `ip`=('$ip') WHERE `id`=('$id')"; 

$result = mysqli_query($connect,$strSQL);
 
if ($result){

    header('location:admin.php'); 

}

?>

<head>

<script language="javascript">

setTimeout("self.close();",500)
//-->
</script> 
</head>