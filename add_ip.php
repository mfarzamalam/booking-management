<?php
 include('common.php');
?>

<?php

$ip = $_GET['ip'];

$strSQL="INSERT INTO ip (ip) VALUES ('$ip') ";
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