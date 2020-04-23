<?php
 include('common.php');
?>

<html>

<head>

<script language="javascript">

setTimeout("self.close();",500)
//-->
</script> 
</head>

<b><font size="2" face="Verdana" color="#800000"><center><?php echo $_SESSION['user'];?></center></font></b>



		
<body>
<?php

$receiver = $_GET['receiver'];
$message = $_GET['message'];
// $receiver = Replace(receiver,"00923","923")  // NEED FXING


$strsmsSQL="INSERT INTO smshistory (`receiver`,`msg`) VALUES ('$receiver','$message')";
$result = mysqli_query($connect,$strsmsSQL);


// receiver = Replace(receiver,"00923","923")


?>
</body>

</html>