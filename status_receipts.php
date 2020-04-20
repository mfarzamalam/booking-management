<?php 
    include("common.php");
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
<title>Status of Receipt</title>
</head>

<body>

<b><font size="2" face="Verdana" color="#800000"><center><?php echo $_SESSION['project'];?></center></font></b>

    
<p align="center"><b><font size="5" face="Verdana">Status of Receipt (s)</font></b></p>
<br>


<form method="GET" style="font-family: Verdana; font-size: 12pt" action="status_receipts_show.php">
  <p align="center">&nbsp;</p>
  <div align="center">
    <center>
    <table border="0" cellpadding="0" cellspacing="4" style="border-collapse: collapse" width="60%" id="AutoNumber1">
 <tr>
        <td width="23%"><font size="2">Total Receipts :-</font></td>
        <td width="43%"><font size="2">
 <B>
<?php 
$strsql="SELECT sum(amount) as c from `receipts` where what = '$_SESSION[user]'";
$result = mysqli_query($connect,$strsql);
$Rs = mysqli_fetch_assoc($result);

?>
  <?php echo $Rs['c'];?>
        </B>
         </font></td>
      </tr>
      </table>
    </center>
  </div>
  <p align="center">&nbsp;</p>
</form>


<table border="3" cellpadding="10" cellspacing="10" style="border-collapse: collapse" width="100%" id="AutoNumber2" bordercolor="#000000">
  <tr>
    <td width="50%">
    <form method="GET" action="status_receipts_show.php">
      <p align="center"><font face="Verdana" size="2">Office No :-</font></p>
      <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="100%" id="AutoNumber3">
        <tr>
          <td width="50%">
          <p align="center"><select size="1" name="FlatNo" style="font-family: Verdana; font-size: 10pt">
        
        
<?php 

$SQL2 = "SELECT `flats` FROM `flats` where `what` = '$_SESSION[user]' order by `flats` ASc";
$result = mysqli_query($connect,$SQL2);

?>

<?php while ($rs = mysqli_fetch_array($result)) {?>

<option value="<?php echo $rs['flats']; ?>"><?php echo $rs['flats']; ?></option>

<?php } ?>
        
        
        
        </select></td>
        </tr>
      </table>
      <p align="center"><input type="submit" value="Submit" name="B1"></p>
    </form>
    </td>
    <td width="50%">
 
    </td>
  </tr>
</table>



</body>

</html>