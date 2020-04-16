 
<?php
  include('common.php');
?>
<head>

<style>
small {
    font-size: .7em
}

</style>

</head>


<?php
$SELLERFULLNAME =isset( $_POST["SELLERFULLNAME"] )?$_POST["SELLERFULLNAME"] :'';
$SELLERCNIC =    isset( $_POST["SELLERCNIC"])     ?$_POST["SELLERCNIC"]:'';
$UNITNO =        isset( $_POST["UNITNO"])         ?$_POST["UNITNO"]:'';
$AMOUNT =        isset( $_POST["AMOUNT"])         ?$_POST["AMOUNT"]:'';
$AMOUNTINWORDS = isset( $_POST["AMOUNTINWORDS"])  ?$_POST["AMOUNTINWORDS"]:'';
$BUYERNAME =     isset( $_POST["BUYERNAME"])      ?$_POST["BUYERNAME"]:'';
$CNICBUYER =     isset( $_POST["CNICBUYER"])      ?$_POST["CNICBUYER"]:'';
$PROJECTNAME =    $_SESSION["project"];

?>

<body topmargin="0" leftmargin="0">
<table  border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;" bordercolor="#111111" id="AutoNumber3" width="100%">
  <tr>
    <td width="100%">
    <p align="center"><img border="0" src="<?php echo $_SESSION["logo"] ?>"></td>
  </tr>
</table>
<br>
<div align="center">
  <center>
  
<table width="100%" background="https://chart.googleapis.com/chart?chl=<?php $PROJECTNAME?>%0A<?php echo date('d/m/Y');?>%0ASeller: <?php echo $SELLERFULLNAME ?>%0ACNIC: <?php echo $SELLERCNIC ?>%0A<?php echo $UNITNO ?>%0A<?php echo $AMOUNT?>%0ABuyer:<?php echo $BUYERNAME ?>%0ACNIC:<?php echo $CNICBUYER ?>&chs=150x150&cht=qr&chld=H%7C0" style="background-repeat:no-repeat; background-position:top right; background-size: 150px 150px;">
<tbody>
<tr>
<td><font face="Verdana" size="2">Date: <b><?php echo date('d/m/Y');?></b></font></td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td style="text-align: center;"><strong><font face="Verdana" size="2">UNDERTAKING</font></strong></td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td><font face="Verdana" size="2">I, <b> <?php echo $SELLERFULLNAME ?> </b>, 
<?php   if ($SELLERCNIC != "") {   ?> holding CNIC No.   <b> <?php echo $SELLERCNIC ?>  </b>, <?php  } ?>  
do hereby undertake and confirm as under:-</font></td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td><font face="Verdana" size="2">That I hereby undertake and confirm that I have Unit No. <b><?php echo $UNITNO ?></b> in a Project known as <b>&ldquo;<?= $PROJECTNAME ?>&rdquo;</b> hereinafter referred to as the &ldquo;Said Property&rdquo;.</font></td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>

<?php if ($AMOUNT == "")  {?>
<tr>
<td><font face="Verdana" size="2">I agreed to sale the &ldquo;Said Property&rdquo; to <b><?php  echo $BUYERNAME ?></b></font></td>
</tr>
<?php } else{ ?>
<tr>
<td><font face="Verdana" size="2">I agreed to sale the &ldquo;Said Property&rdquo; at the agreed sale consideration of <b>Rs.<?php echo $AMOUNT ?>/=</b> (Rupees <b><?php $AMOUNTINWORDS ?></b> only).</font></td>
</tr>
<?php }?>

<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td><font face="Verdana" size="2">Now Request you to Kindly transfer the said Unit to <b><?php echo $BUYERNAME ?></b>, <?php if ($SELLERCNIC != "")  { ?>holding CNIC No. <b><?php echo $CNICBUYER ?></b>.<?php } ?> I received my Flat sale Amount along with own money (if any) From <b><?php echo $BUYERNAME ?></b>.</font></td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td><font face="Verdana" size="2">In future I shall have no claim or any rights on the said property which is now entire property of <b><?php echo $BUYERNAME ?></b>.</font></td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td><font face="Verdana" size="2">In future I shall not raise any claim or any objection on the said property and I surrender my fully rights to <b><?php echo $BUYERNAME ?></b>.</font></td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td><font face="Verdana" size="2"><b><?php echo $BUYERNAME ?></b> will abide by the terms and conditions of booking agreement, and, <b><?php echo $BUYERNAME ?></b> is bound to pay the all Installment to builder.</font></td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td><font face="Verdana" size="2">That whatever stated above I correct and true.</font></td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>


</tbody>
</table>

<table width="100%">
<tbody>
<tr>
<td><font face="Verdana" size="2"><b>WITNESS</b></font></td>
<td style="text-align: right;"><font face="Verdana" size="2"><b>Deponent Signature:</b>--------------------------</font></td>
</tr>
<tr>
<td><font face="Verdana" size="2"><br><br>1.)--------------------------<br>CNIC : --------------------------</font></td>
<td style="text-align: right;"><font face="Verdana" size="2">CNIC: <b><?php echo $SELLERCNIC ?></b></font></td>
</tr>
<tr>
<td><font face="Verdana" size="2"><br><br>2.)--------------------------<br>CNIC : --------------------------</font></td>
<td style="text-align: right;"><font face="Verdana" size="2">Name: <b><?php echo $SELLERFULLNAME?></b></font></td>
</tr>
</tbody>
</table>

  
 </center>
</div>

</body>