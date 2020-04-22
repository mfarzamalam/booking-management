<?php 
  include('common.php');
?>

 
<?php 

$dated = $_POST['date'];
$name = $_POST['Name'];
$FlatNo = $_POST['FlatNo'];
$PaymentMode = $_POST['PaymentMode'];
$amount = $_POST['Amount'];
$chequeno = $_POST['chequeno'];
$drawnon = $_POST['drawnon'];
$chequedate = $_POST['chequedate'];
$contactno = $_POST['contactno'];
$specialnote = $_POST['specialnote'];
$specialnote = $specialnote ."<br>";
$from = $FlatNo." ".$_SESSION['user'];

function generatePassword($passwordLength){
  $permitted_chars  = "cgkmpwrtEFHsVX123456789";
   $input_length = strlen($permitted_chars);
   $random_string = '';
   for($i = 0; $i < $passwordLength; $i++) {
       $random_character = $permitted_chars [mt_rand(0, $input_length - 1)];
       $random_string .= $random_character;
   }

   return $random_string;

}
// USAMA hussain rebate 

$code = "";
if (strpos($name, "rebate") !== false || strpos($amount, "-") !== false  || $PaymentMode !== "Cash") {
  $code = generatePassword(4);
  $strSQL1="INSERT INTO codemanager (`fromm`,`chqno`,`bank`,`code`,`datee`,`amount`) 
  VALUES            ('$from','$chequeno','$drawnon','$code','$dated','$amount')";

$result2 = mysqli_query($connect,$strSQL1);
  
} 



$strSQL2="INSERT INTO receipts (`name`,`amount`,`chequedate`,`drawnon`,`chequeno`,`contactno`,`date`,
                              `paymentmode`,`flatno`,`code`,`specialnote`,`what`) 
                  VALUES       ('$name','$amount','$chequedate','$drawnon','$chequeno','$contactno',
                                '$dated','$PaymentMode','$FlatNo','$code','$specialnote','$_SESSION[user]')";

$result2 = mysqli_query($connect,$strSQL2);

?>

<?php if (strpos($name, "rebate") === false || strpos($amount, "-") === false  || $PaymentMode !== "Cash") { ?>

<head>
<link rel="stylesheet" href="popup.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-1.8.2.js"></script>
<script src="popup.js"></script>


</head>

<?php } ?>

<body topmargin="0" leftmargin="0">

<?php if (strpos($name, "rebate") !== false && strpos($amount, "-") !== false  && $PaymentMode !== "Cash") { ?>

<div class='popup'>
<div class='cnt223'>
<h2>Cheque Code</h2>
<p><h1><?php echo $code ?>
</h1><br/>
<a href='' class='close'>Close</a>
</p>
</div>
</div>

<?php } ?>

<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber3" width="100%">
  <tr>
    <td width="92%">
    <p align="center"><img border="0" src="<?php echo $_SESSION['logo'];?>"></td>
  </tr>
</table>
<br>
<p align="center"><b><font size="4" face="Verdana">Voucher</font></b></p>
<div align="center">
  <center>
<table border="0" cellpadding="0" cellspacing="15" style="border-collapse: collapse" bordercolor="#111111" width="95%" id="AutoNumber2">
  <tr>
    <td width="15%">&nbsp;</td>
    <td width="75%">&nbsp;</td>
    <td width="15%" align="left"><b><font size="3" face="Verdana">Date :</font></b></td>
    <td width="16%" align="left"><font size="3" face="Verdana"><u><?php echo $dated;?></u></font></td>
  </tr>
</table>
  </center>
</div>
<div align="center">
  <center>
  <table background="https://chart.googleapis.com/chart?chl=<?php $_SESSION['project']?>%0A<?php $name;?>%0A<?php $FlatNo;?>%0A<?php $PaymentMode; ?>%0ARs.<?php $amount;?>&chs=175x175&cht=qr&chld=H%7C0" border="0" cellpadding="0" style="border-collapse: collapse; background-repeat:no-repeat; background-position:top right; background-size: 100px 100px;" width="95%" id="AutoNumber1" cellspacing="20">
   
    <tr>
      <td width="185"><b><font face="Verdana" size="3">Client Name :</font></b></td>
      <td width="625"><font size="3" face="Verdana"><?php echo $name;?></font></td>
    </tr>
    <tr>
      <td width="185"><b><font size="3" face="Verdana">Unit Number :</font></b></td>
      <td width="625"><font size="3" face="Verdana" color="brown"><b><?php echo $FlatNo;?></b></font></td>
    </tr>
    <tr>
      <td width="185"><b><font size="3" face="Verdana">Payment Mode :</font></b></td>
      <td width="625"><font size="3" face="Verdana"><?php echo $PaymentMode;?></font></td>
    </tr>
    <tr>
      <td width="185"><b><font size="3" face="Verdana">Amount :</font></b></td>
      <td width="625"><font size="3" face="Verdana"><i>=<?php echo $amount;?>/=</i></font></td>
    </tr>

    <?php if ($PaymentMode == "Cheque") {         ?>
<tr>
      <td width="185"><b><font size="3" face="Verdana">Cheque No :</font></b></td>
      <td width="625"><font size="3" face="Verdana"><?php echo $chequeno;?></font></td>
    </tr>
    <tr>
      <td width="185"><b><font size="3" face="Verdana">Drawn On :</font></b></td>
      <td width="625"><font size="3" face="Verdana"><?php echo $drawnon;?></font> 
      <b><font size="3" face="Verdana">Cheque Date :</font></b>  
      <font size="3" face="Verdana"><?php echo $chequedate;?></font></td>
    </tr>
	 
  	
    <?php } elseif ($PaymentMode == "Payorder" ) {   ?>
    <tr>
      <td width="185"><b><font size="3" face="Verdana">Payorder No :</font></b></td>
      <td width="625"><font size="3" face="Verdana"><?php echo $chequeno;?></font></td>
    </tr>
     <tr>
      <td width="185"><b><font size="3" face="Verdana">Drawn On :</font></b></td>
      <td width="625"><font size="3" face="Verdana"><?php echo $drawnon;?></font>
       <b><font size="3" face="Verdana">Payorder Date :</font></b> 
        <font size="3" face="Verdana"><?php echo $chequedate;?></font></td>
    </tr>
	<!--
    <tr>
      <td width="185"><b><font size="3" face="Verdana">Payorder Date :</font></b></td>
      <td width="625"><font size="3" face="Verdana"><% response.write request.form("chequedate") %></font></td>
    </tr>
	-->
   <?php 
    }
   ?>
	
	
      <?php if ( $FlatNo !== "Utility") {?>
        <?php if (  $_POST['shbalance'] == "Show") {?>

      <?php 
$strsql="SELECT sum(amount) as c from `receipts` WHERE `FlatNo`='$FlatNo' AND `what` = '$_SESSION[user]'";
$Rs = mysqli_query($connect,$strsql);
$Rs = mysqli_fetch_assoc($Rs);
$aya = $Rs['c'];


$strsql="SELECT sum(sold) as sprice from `flats` WHERE `Flats`='$FlatNo' AND what = '$_SESSION[user]'";
$Rs = mysqli_query($connect,$strsql);
$Rs = mysqli_fetch_assoc($Rs);

$baichahuwa = $Rs['sprice'];


?>

<tr>
      <td width="185"><b><font size="3" face="Verdana">Total Balance :</font></b></td>
      <td width="625"><font size="6" face="Verdana"><b><?php 
    
    $bee = $baichahuwa-$aya;

    echo $bee;

?>
 

 </b></font></td>
    </tr>
	
	<!--<tr>
      <td width="185"><b><font size="3" face="Verdana">Total Paid :</font></b></td>
      <td width="625"><font size="3" face="Verdana">You have paid around <b><% 
		receivedhisab = (Clng(aya)/CLng(baichahuwa)*100)
		
		response.write FormatNumber(receivedhisab, -0)
		%>
		
		<% response.write "%"%></b> upto date.</font></td>
    </tr>
	-->
	
		<tr>
      <td width="185"><b><font size="3" face="Verdana">Total Paid :</font></b></td>
      <td width="625"><font size="3" face="Verdana"><b><?php  
		$receivedhisab = ($aya/ $baichahuwa ) * 100 ;
          
    #echo number_format ($receivedhisab);
		?>
		<img src="http://www.yarntomato.com/percentbarmaker/button.php?barPosition=<?php echo number_format($receivedhisab); ?>&amp;leftFill=" alt="Result" id="generated" width="102" height="15">
		
		</b></font></td>
    </tr>
	
	
	
	
	    <tr>
      <td width="185"><b><font size="3" face="Verdana">Completion Date:</font></b></td>
      <td width="625"><font size="3" face="Verdana"><b>[PAY BEFORE <?php echo   $_SESSION['completiondate']?> ]</b></font></td>
    </tr>
	
  <?php if($_POST['specialshow'] == "Show"){?>
    <?php if($specialnote !== ""){?>

  <tr>
      <td width="185"><b><font face="Verdana" size="3">Special Note :</font></b></td>
      <td width="625"><font size="3" face="Verdana"><?php echo $specialnote;?></font></td>
    </tr>
  <?php }?> <!-- special note end -->	
<?php }?>	<!-- special show end -->


<?php 

$query = "SELECT `subject`,`message` from `msg` where  `position` = '1' AND what = '$_SESSION[user]' ORDER by `id` ASC";
$result = mysqli_query($connect,$query);

while($ps = mysqli_fetch_assoc($result)){ 
?>
    <tr style="border:1px dashed black;">
      <td width="185"><b><font size="2" face="Verdana"><?php echo $ps['subject'];?></font></b></td>
      <td width="625"><font size="2" face="Verdana"><i><?php echo $ps['message'];?></i></font></td>
    </tr>
<?php }?>

		<?php 

$query = "SELECT `subject`,`message` from `msg` where  `position` = '2' AND what = '$_SESSION[user]' ORDER by `id` ASC";
$result = mysqli_query($connect,$query);

while($ps = mysqli_fetch_assoc($result)){ 
?>
	    <tr>
        <td width="185"><b><font size="2" face="Verdana"><?php echo $ps['subject'];?></font></b></td>
        <td width="625"><font size="2" face="Verdana"><i><?php echo $ps['message'];?></i></font></td>
      </tr>
<?php }?>
			
<?php 

$query = "SELECT `subject`,`message` from `msg` where  `position` = '3' AND what = '$_SESSION[user]' ORDER by `id` ASC";
$result = mysqli_query($connect,$query);

while($ps = mysqli_fetch_assoc($result)){ 
?>	
	    <tr style="border:1px dashed black;">
        <td width="185"><b><font size="2" face="Verdana"><?php echo $ps['subject'];?></font></b></td>
        <td width="625"><font size="2" face="Verdana"><i><?php echo $ps['message'];?></i></font></td>
      </tr>
<?php }?>
	
<?php 

$query = "SELECT `subject`,`message` from `msg` where  `position` = '4' AND what = '$_SESSION[user]' ORDER by `id` ASC";
$result = mysqli_query($connect,$query);

while($ps = mysqli_fetch_assoc($result)){ 
?>	
	    <tr>
        <td width="185"><b><font size="2" face="Verdana"><?php echo  $ps['subject'];?></font></b></td>
        <td width="625"><font size="2" face="Verdana"><i><?php echo $ps['message'];?></i></font></td>
    </tr>

<?php }?>


<?php 

$query = "SELECT `subject`,`message` from `msg` where  `position` = '5' AND what = '$_SESSION[user]' ORDER by `id` ASC";
$result = mysqli_query($connect,$query);

while($ps = mysqli_fetch_assoc($result)){ 
?>	
	    <tr style="border:1px dashed black;">
        <td width="185"><b><font size="2" face="Verdana"><?php  echo $ps['subject'];?></font></b></td>
        <td width="625"><font size="2" face="Verdana"><i><?php echo $ps['message'];?></i></font></td>
      </tr>
<?php }?>


<?php 

$query = "SELECT `subject`,`message` from `msg` where  `position` = '6' AND what = '$_SESSION[user]' ORDER by `id` ASC";
$result = mysqli_query($connect,$query);

while($ps = mysqli_fetch_assoc($result)){ 
?>	
	    <tr>
        <td width="185"><b><font size="2" face="Verdana"><?php echo $ps['subject'];?></font></b></td>
        <td width="625"><font size="2" face="Verdana"><i><?php echo $ps['message'];?></i></font></td>
    </tr>

<?php }?>

	
<?php 

$query = "SELECT `subject`,`message` from `msg` where  `position` = '7' AND what = '$_SESSION[user]' ORDER by `id` ASC";
$result = mysqli_query($connect,$query);

while($ps = mysqli_fetch_assoc($result)){ 
?>	
	    <tr style="border:1px dashed black;">
        <td width="185"><b><font size="2" face="Verdana"><?php echo $ps['subject'];?></font></b></td>
        <td width="625"><font size="2" face="Verdana"><i><?php echo  $ps['message'];?></i></font></td>
      </tr>
<?php }?>
	
	
    <?php }?>
<?php }?>
	
  </table>
  </center>
</div>

<div align="center">
  <center>
  <br>
<table border="0" cellpadding="0" cellspacing="3" style="border-collapse: collapse" bordercolor="#111111" width="95%" id="AutoNumber2">
   <tr>
    <td width="33%" align="center">&nbsp;</td>
    <td width="37%" align="center">&nbsp;</td>
    <td width="29%" align="center"><!-- <font size="2" face="Verdana">This is a computerized generated receipt, does not require Signature</font>--></td>
  </tr>
  <tr>
    <td width="33%" align="center">&nbsp;</td>
    <td width="37%" align="center">&nbsp;</td>
    <td width="29%" align="center"><font size="2" face="Verdana">For </font>
    <font face="Verdana"><?php echo $_SESSION['project'];?></font></td>
  </tr>

</table>
<br>
<table border="0" cellpadding="0" cellspacing="2" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber2">
   
  <?php if($FlatNo !== "Utility"){?>
      <?php if($_POST['shbalance'] == "Show"){?>  
  

<tr>
<td width="100%" align="center"><font size="1" face="Verdana">
Please clear your all your Payments as per Schedule on Booking Letter before <?php echo $_SESSION['completiondate'];?>.
</font>
</td>
</tr>

<tr>
<td width="100%" align="center">
<font size="1" face="Verdana"><b>
Total Sale Price is excluded from Transfer fee, stamps duty, registration charges, K.E.S.C meter charges, PMT, HTc, LT, KE OWN, KE Material, SSGC, All GAS Work, KESC Work, and all other utility charges, CVT, transfer fees, electricity, Property Tax , KW&SB, EXCISE & Taxation, Water Connection, Registrar Office, Owns, Documentation, Lawyer charges are extra.
</b></font></td>

<?php 

$query = "SELECT `subject`,`message` from `msg` where  `position` = '8' AND what = '$_SESSION[user]' ORDER by `id` ASC";
$result = mysqli_query($connect,$query);

while($ps = mysqli_fetch_assoc($result)){ 
?>	

	<tr>
    <td width="100%" align="center">
    <font size="1" face="Verdana"><?php echo $ps['message'];?></font></td>
  </tr>

<?php } ?>

<?php if ($PaymentMode === "Cheque"){?>

		 <tr>
<td width="100%"><font size="0.5em" face="Verdana"><b><center>This receipt is valid upon Realization of Cheque!</center></b></font></td>
  
</tr>


<?php } ?>


<tr>

<td width="100%"><font size="0.5em" face="Verdana"><center>By Accepting this receipt, I/We <b><?php if(isset($_POST["agname"]) ) echo $_POST["agname"] ?></b> acknowledge That I/We have read and understood do hereby accept all Terms & Conditions of this receipt also I/We accept/undertake to abide by it in future.</center></font></td>
  
</tr>



    <?php } ?>

<?php } ?>

</table>


</center>
</div>