<?php
 include('commonadmin.php');
?>

<?php

$ip = $_POST['ip'];

$strSQL="INSERT INTO ip (ip) VALUES ('$ip') ";
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