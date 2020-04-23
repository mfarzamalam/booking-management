<?php
   include('common.php');
 
?>

<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Test SMS - <?php echo $_SESSION["project"]?></title>
<style>

body   { font-family: Arial; font-size: 12pt }

</style>




<script language="javascript">

setTimeout("self.close();",500)
//-->

</script> 
</head>

<body>

<b><font size="2" face="Verdana" color="#800000"><center><?php echo $_SESSION["project"]?></center></font></b>


    <br>

<?php



$strsmsSQL="INSERT INTO `smshistory` (`receiver`,`msg`) VALUES ('923323130544','SMS Service is ON Now')";

$result = mysqli_query($connect,$strsmsSQL);

?>


<hr>


</body>
</html>