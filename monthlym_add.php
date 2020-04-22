<?php 
  include('common.php');
?>

<?php 

  if ($_SESSION['user'] == "") {
        header('location:default.php');
    }

?>

<head>
<script language="Javascript1.2">
  
  function printpage() {
  window.print();
  }
  //-->
</script>
</head>

<?php

$dated = $_POST['date'];
$name = $_POST['Name'];
$FlatNo = $_POST['FlatNo'];
$amount = $_POST['Amount'];
$status = "Received";


$strSQL="INSERT INTO monthlymain (`date`,`name`,`flatno`,`amount`,`status`,`what`) VALUES 
                                  ('$dated','$name','$FlatNo','$amount','$status','$_SESSION[user]')";

$query = mysqli_query($connect,$strSQL);
?>

<body topmargin="0" leftmargin="0">

<p align="center"><b><font size="4" face="Verdana">Maintainance Receipt Voucher<br>
&nbsp;</font></b></p>
<div align="center">
  <center>
<table border="0" cellpadding="0" cellspacing="15" style="border-collapse: collapse" bordercolor="#111111" width="95%" id="AutoNumber2">
  <tr>
    <td width="25%">&nbsp;</td>
    <td width="53%">&nbsp;</td>
    <td width="8%" align="left"><b><font size="3" face="Verdana">Date :</font></b></td>
    <td width="16%" align="left"><font size="3" face="Verdana"><u><?php echo $dated; ?></u></font></td>
  </tr>
</table>
  </center>
</div>
<div align="center">
  <center>
  <table border="0" cellpadding="0" style="border-collapse: collapse" width="95%" id="AutoNumber1" cellspacing="20">
    <tr>
      <td width="185">&nbsp;</td>
      <td width="625">&nbsp;</td>
    </tr>
    <tr>
      <td width="185"><b><font face="Verdana" size="3">Client Name :</font></b></td>
      <td width="625"><font size="3" face="Verdana"><?php echo $name; ?></font></td>
    </tr>
    <tr>
      <td width="185"><b><font face="Verdana">Unit</font><font size="3" face="Verdana"> 
      Number :</font></b></td>
      <td width="625"><font size="3" face="Verdana" color="brown"><b><?php echo $FlatNo; ?></b></font></td>
    </tr>

    <tr>
      <td width="185"><b><font size="3" face="Verdana">Amount Received:</font></b></td>
      <td width="625"><font size="3" face="Verdana">=<?php echo number_format($amount); ?>/=</font></td>
    </tr>
	
       <tr>
      <td width="185"><b><font size="3" face="Verdana">Dues Now:</font></b></td>
      <td width="625"><font size="3" face="Verdana">
	  
      <?php

$strsql="SELECT sum(amount) as c from `monthlymain` where `flatno` = '$FlatNo' and what='$_SESSION[user]'";
$result = mysqli_query($connect,$strsql);
$ws = mysqli_fetch_assoc($result);

?>
<?php if ($ws['c'] !== "") { ?>
<?php echo number_format($ws['c'])?>
<?php } else {
echo "0";
} 

?>
	  
	  </font></td>
    </tr>
	
	

	
  </table>
  </center>
</div>

<div align="center">
  <center>
<table border="0" cellpadding="0" cellspacing="3" style="border-collapse: collapse" bordercolor="#111111" width="95%" id="AutoNumber2">
   <tr>
    <td width="33%" align="center">&nbsp;</td>
    <td width="37%" align="center">&nbsp;</td>
    <td width="29%" align="center"><font size="2" face="Verdana">This is a computerized generated receipt, does not require Signature</font></td>
  </tr>
  
  <!--
  <tr>
    <td width="33%" align="center">&nbsp;</td>
    <td width="37%" align="center">&nbsp;</td>
    <td width="29%" align="center"><font size="2" face="Verdana">For </font>
    <font face="Verdana"><%=session("project")%></font></td>
  </tr>
  
  --->

</table>


</center>
</div>