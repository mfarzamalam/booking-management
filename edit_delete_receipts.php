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
<title>Status of Receipt</title>
</head>

<body>

<b><font size="2" face="Verdana" color="#800000"><center><?php echo $_SESSION["project"]; ?></center></font></b>

    
<p align="center"><b><font size="5" face="Verdana">Edit / Delete Receipt (s)</font></b></p>
<br>

<form method="GET" style="font-family: Verdana; font-size: 12pt" action="edit_delete_receipts_show.php">
  <p align="center">&nbsp;</p>
  <div align="center">
    <center>
    <table border="0" cellpadding="0" cellspacing="4" style="border-collapse: collapse" width="60%" id="AutoNumber1">
      <tr>
        <td width="23%"><font face="Verdana" size="2">Office No :-</font></td>
        <td width="43%"><select size="1" name="FlatNo" style="font-family: Verdana; font-size: 10pt">
<?php
$SQL2 = "SELECT `flats` FROM `flats` where what = '$_SESSION[user]' order by flats ASc";
$result = mysqli_query($connect,$SQL2);
while ($rs = mysqli_fetch_array($result)) {
?>
    <option value="<?php echo $rs['flats'];?>"><?php echo $rs['flats'];?></option>

<?php }?>

 </select></td>
      </tr>
      </table>
    </center>
  </div>
  <p align="center"><font face="Verdana"><font size="2"><br>
  <br>
  </font><input type="submit" value="Submit" style="font-family: Verdana; font-size: 10pt"><font size="2"><br>
  <br>
</font></font></p>
</form>



</body>

</html>