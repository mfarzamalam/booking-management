<?php
 include('common.php');
?>

<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>SMS Campain - <?php echo $_SESSION['project']; ?></title>
<style>

body   { font-family: Arial; font-size: 12pt }

</style>




<script language="javascript">

setTimeout("self.close();",5000)

</script> 
</head>

<body>

<b><font size="2" face="Verdana" color="#800000"><center><?php echo $_SESSION['project']; ?></center></font></b>


    <br>

  

<?php 
$konhaiadd = $_GET['konhaiadd'];
$message = $_GET['message'];
$campainid = $_GET['campainid'];


if ($campainid == "") {

header('location:contactlist.php?msg=Must Use Campain ID');

} else {

$attach = " $message "."\n". " http://luckybuilders.com.pk/details- "." $campainid ". " -copy ";
$strsmsSQLtt="INSERT INTO smshistory (`receiver`,`msg`) VALUES ('923323130544','$attach')";
$result = mysqli_query($connect,$strsmsSQLtt);


$query = "SELECT * from `contactlist` where `konhai`='$konhaiadd' and `subscribe`= 'Sub'";
$result2 = mysqli_query($connect,$query);

while ($ps = mysqli_fetch_assoc($result2)) { 

$receiver = $ps['number'];
$id = $ps['id'];
$name = $ps['name'];
$code = $ps['code'];

$message = "$name + " . "+ $message" ;

// $receiver = Replace(receiver,"00923","923")  // NEED FIXING

$combine = "$name"."\n"."$message"."\n"."http://luckybuilders.com.pk/details-"."$campainid"."-"."$code";

$strsmsSQL="INSERT INTO smshistory (`receiver`,`msg`) VALUES ('$receiver','$combine')";

$res = mysqli_query($connect,$strsmsSQL);

?>


<hr>
  
<?php 

$query = "UPDATE `contactlist` SET  `statusss` =  ('sent') WHERE `id` =('$id')"; 
$result3 = mysqli_query($connect,$query);

}
$ps = "Nothing";

}

?>

</body>

</html>