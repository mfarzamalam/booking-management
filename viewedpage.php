<?php
   include('common.php');
 
?>

<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>History Viewed - <?php echo $_SESSION["project"]?></title>
<style>

body   { font-family: Arial; font-size: 12pt }

</style>
</head>

<body>

<b><font size="2" face="Verdana" color="#800000"><center><?php echo $_SESSION["project"]?></center></font></b>

<hr>


    <br>

    <table border="1" cellpadding="3" cellspacing="3" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber4">

<?php

$query = "SELECT * from `campainvisits` ORDER by ID DESC limit 0,100"; 

$result = mysqli_query($connect,$query);

while($ps = mysqli_fetch_assoc($result)) { 

?>  

<tr>

<td width="30%"><font face="Verdana" style="font-size: 8pt">
<?php

$query1 = "SELECT * from `campains` where `id` ='$ps[campainid]'";
$result1 = mysqli_query($connect,$query1);

$qs = mysqli_fetch_assoc($result1);

if ($ps) { ?>

<?php echo $qs['name'];?>

<?php } ?>

</font></td>
<td width="50%"><font face="Verdana" style="font-size: 8pt">

<?php

$query3 = "SELECT * from `contactlist` where `code` ='$ps[code]'";
$result1 = mysqli_query($connect,$query3);

$ts = mysqli_fetch_assoc($result1);

if ($ts) { ?>

<?php echo $ts['name'] ?> | <?php echo $ts['number'] ?> | <?php echo $ts['konhai'] ?>

<?php } ?>

</font></td>
<td width="20%"><font face="Verdana" style="font-size: 8pt"><?php echo $ps['datetime'];?></font></td>


</tr>
	  
<?php } 

$ps = "Nothing";

?>
    </table>

  
    </td>
  </tr>
</table>

</body>

</html>