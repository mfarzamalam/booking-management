<?php 
  include('common.php');
?>

<?php 

  if ($_SESSION['user'] == "") {
        header('location:default.php');
    }

?>

<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Last 50 Receipts</title>
</head>

<body>
<b><font size="2" face="Verdana" color="#800000"><center><?php echo $_SESSION["project"]; ?></center></font></b>

<p align="right"><font size="1" face="Verdana">Date : <?php echo Date("d/m/Y");?>


</font>
</p>
<p align="center"><b><font face="Verdana" size="5">Last 50 Receipts</font></b></p>


<table border="0" cellpadding="0" cellspacing="10" style="border-collapse: collapse" width="100%" id="AutoNumber1">
  <tr>
    <td width="50%" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td width="50%" align="center" valign="top"><font face="Verdana" size="2">
    
    <table border="0" cellpadding="0" cellspacing="5" style="border-collapse: collapse; border:1px dashed black;" width="100%" id="AutoNumber1">
  <tr>
    <td width="20%" align="center"><font size="1" face="Verdana"><b>DATE</b></font></td>
    <td width="20%" align="center" valign="top"><font size="1" face="Verdana"><b>PARTICULARS</b></font></td>
    <td width="20%" align="center"><font size="1" face="Verdana"><b>AMOUNT</b></font></td>
    <td width="20%" align="center"><font size="1" face="Verdana"><b>UNIT</b></font></td>
	<td width="20%" align="center"><font size="1" face="Verdana"><b>CODE</b></font></td>
  </tr>
    
 <?php 
$SQL2 = "SELECT `date`,`name`,`chequeno`,`amount`,`flatno`,`code` from `receipts` where `what`='$_SESSION[user]' AND `name` <> 'hide' order by `ID` DESC limit 0,50";
$result = mysqli_query($connect,$SQL2);

while ($rs = mysqli_fetch_array($result)){
?>
  <tr>
    <td width="20%" style="border:1px dashed black;" align="center"><font size="1" face="Verdana"><?php echo $rs['date'];?></font></td>
    <td width="20%" style="border:1px dashed black;" align="center"><font size="1" face="Verdana"><?php echo $rs['name'];?> *****  <?php $rs['chequeno'];?></font></td>
    <td width="20%" style="border:1px dashed black;" align="center"><font size="1" face="Verdana"><?php echo $rs['amount'];?></font></td>
    <td width="20%" style="border:1px dashed black;" align="center"><font size="1" face="Verdana"><?php $rs['flatno'];?></font></td>
		 <td width="20%" style="border:1px dashed black;" align="center"><font size="1" face="Verdana"><?php $rs['code'];?></font></td>
</tr> 

<?php } ?>
    </table>

    
    </font></td>
  </tr>
</table>

</body>

</html>