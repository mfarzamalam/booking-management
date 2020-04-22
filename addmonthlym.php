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
<title>Receipts Maintainance - <?php echo $_SESSION["project"]; ?></title>



<b><font size="2" face="Verdana" color="#800000"><center><?php echo $_SESSION["project"]; ?></center></font></b>

    
</head>

<body>

<p align="center"><font face="Verdana"><b><font size="5">Maintainance Voucher</font></b><br>
</font></p>
<br>
<form method="POST" style="font-family: Verdana; font-size: 12pt" action="monthlym_add.php" name="formcheck" onsubmit="return formCheck(this);">
  <div align="center">
    <center>
    <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="60%" id="AutoNumber1">
      <tr>
        <td width="23%"><font size="2">Date :-</font></td>
        <td width="43%">
        <input type="text" name="date" size="14" style="font-family: Verdana; font-size: 10pt" value="<?php echo Date("d/m/Y");?>"></td>
      </tr>
      <tr>
        <td width="23%"><font face="Verdana" size="2">Name :-</font></td>
        <td width="43%">
        <input type="text" name="Name" size="36" value="<?php echo $_GET['name'];?>" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>
      <tr>
        <td width="23%"><font face="Verdana" size="2">Office No :-</font></td>
        <td width="43%"><select size="1" name="FlatNo" style="font-family: Verdana; font-size: 10pt">
<?php
$SQL2 = "SELECT `flats` FROM `flats` where `what` = '$_SESSION[user]' order by flats ASc";
$rs = mysqli_query($connect,$SQL2);

?> 

<option value="<?php echo $_GET['flatno'];?>" selected><?php echo $_GET['flatno'];?></option>
<?php while ($rs = mysqli_fetch_assoc($rs)) { ?>

<option value="<?php echo $rs['flats']?>"><?php echo $rs['flats']?></option>


<?php }?>

</select></td>
      </tr>
      
      
      
      
      
  
      <tr>
        <td width="23%"><font face="Verdana" size="2">Amount ( RS ) :-</font></td>
        <td width="43%">
        <input type="text" name="Amount" value="-<?php echo $_GET['amount'];?>" size="36" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>
     
    
  
    </table>
    </center>
  </div>
  <p align="center"><input type="submit" value="Submit" style="font-family: Verdana; font-size: 10pt"></font></p>
</form>

</body>

</html>