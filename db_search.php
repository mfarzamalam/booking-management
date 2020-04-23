
<?php
   include('common.php');
 
?>

<?php
// $strURL = $_GET['URL'];
if (isset($_GET["search"])) 
$strSearch = $_GET['search'];
else 
$strSearch ="";
  // Problem in this line 
?>

<b><font size="2" face="Verdana" color="#800000"><center><?php echo $_SESSION["project"]?></center></font></b>

    

<p align="right"><font size="1" face="Verdana">Date : <?php echo Date("d/m/Y");?>
 </font>
</p>
<p align="center"><b><font size="5" face="Verdana">Search Receipts (s) <?php echo $_SESSION["project"]; ?></font></b></p>
<br>



<center>
<form action="db_search.php" method="get">
<input name="search" value="<?php  echo $strSearch?>" size="20" />
<input type="submit" />
</form> </center>
<?php
    if (isset($_GET["search"])) {
	
$SQL2 = "SELECT * FROM `receipts` where `chequeno` like '%$strSearch%' OR `name` like '%$strSearch%' AND what = '$_SESSION[user]' order by ID ASc";
$result = mysqli_query($connect,$SQL2);

?>
	
	
		  <div align="center">
    <center>
    <table border="0" cellpadding="2" cellspacing="0" style="border-collapse: collapse" width="100%" id="AutoNumber2" bordercolorlight="#000000" bgcolor="#000000">
      <tr>
        <td width="8%" align="center"><b><font face="Verdana" size="1" color="#FFFFFF">Date</font></b></td>
        <td width="18%" align="center"><font face="Verdana" size="1" color="#FFFFFF"><b>Name</b></font></td>
        <td width="8%" align="center"><b><font face="Verdana" size="1" color="#FFFFFF">Amount</font></b></td>
        <td width="22%" align="center"><font face="Verdana" size="1" color="#FFFFFF"><b>Bank</b></font></td>
        <td width="10%" align="center"><font face="Verdana" size="1" color="#FFFFFF"><b>Chq 
        No.</b></font></td>
        <td width="10%" align="center"><font face="Verdana" size="1" color="#FFFFFF"><b>Chq 
        Date</b></font></td>
          <td width="13%" align="center"><b><font face="Verdana" size="1" color="#FFFFFF">Unit No</font></b></td>
        <td width="28%" align="center"><b><font face="Verdana" size="1" color="#FFFFFF">Payment Mode</font></b></td>
      </tr>
    </table>
    </center>
  </div>
	
	
	
<?php while($rs = mysqli_fetch_assoc($result)) {?>
		
		
		
		<tr>
		<td></td>
		<td></td>
		</tr>
		


  <div align="center">
    <center>
    <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber2">
      <tr>
        <td width="8%" align="center"><font face="Verdana" size="1"><?php echo $rs['date'];?></font>&nbsp;</td>
        <td width="18%" align="center"><font face="Verdana" size="1"><?php echo $rs['Name'];?></font>&nbsp;</td>
        <td width="8%" align="center"><font face="Verdana" size="1"><?php echo $rs['Amount'];?></font>&nbsp;</td>
        <td width="22%" align="center"><font face="Verdana" size="1"><?php echo $rs['drawnon'];?></font>&nbsp;</td>
        <td width="10%" align="center"><font face="Verdana" size="1"><?php echo $rs['chequeno'];?></font>&nbsp;</td>
        <td width="10%" align="center"><font face="Verdana"size="1"><?php echo $rs['chequedate'];?></font>&nbsp;</td>
        <td width="13%" align="center"><font face="Verdana"size="1"><?php echo $rs['FlatNo'];?></font>&nbsp;</td>
        <td width="28%" align="center"><font face="Verdana" size="1"><?php echo $rs['PaymentMode'];?></font>
       
        </td>
      </tr>
    </table>
    </center>
  </div>
	
    <?php } ?>
</table>
<?php } ?>
