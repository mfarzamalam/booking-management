<?php
   include('common.php');
 
?>

<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>History SMS - <?php echo $_SESSION["project"]?></title>
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
$query = "SELECT * from `smshistory` ORDER by ID DESC limit 0,300";
$result = mysqli_query($connect,$query);

while($ps = mysqli_fetch_assoc($result)) { 

?>

<tr>

<td width="10%"><font face="Verdana" style="font-size: 8pt"><?php echo $ps['receiver'];?></font></td>
<td width="60%"><font face="Verdana" style="font-size: 8pt"><?php echo $ps['msg'];?></font></td>
<td width="20%"><font face="Verdana" style="font-size: 8pt"><?php echo $ps['datetime'];?></font></td>
<td width="10%"><font face="Verdana" style="font-size: 8pt"><?php echo $ps['statusss'];?></font></td>

</tr>
	
<?php 
}

$ps = "Nothing";

?>
    </table>

  
    </td>
  </tr>
</table>

</body>

</html>