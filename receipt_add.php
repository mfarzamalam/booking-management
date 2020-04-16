<?php
    include('common.php');

?>
<head>
<link rel="stylesheet" href="popup.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-1.8.2.js"></script>
<script src="popup.js"></script>


</head>



<body topmargin="0" leftmargin="0">

<div class='popup'>
<div class='cnt223'>
<h2>Cheque Code</h2>
<p><h1></h1><br/>
<a href='' class='close'>Close</a>
</p>
</div>
</div>


<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber3" width="100%">
  <tr>
    <td width="92%">
    <p align="center"><img border="0" src=""></td>
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
    <td width="16%" align="left"><font size="3" face="Verdana"><u></u></font></td>
  </tr>
</table>
  </center>
</div>
<div align="center">
  <center>
  <table background="https://chart.googleapis.com/chart?chl=%0A&chs=175x175&cht=qr&chld=H%7C0" border="0" cellpadding="0" style="border-collapse: collapse; background-repeat:no-repeat; background-position:top right; background-size: 100px 100px;" width="95%" id="AutoNumber1" cellspacing="20">
   
    <tr>
      <td width="185"><b><font face="Verdana" size="3">Client Name :</font></b></td>
      <td width="625"><font size="3" face="Verdana"> <?php echo "$_POST[Name]"?> </font></td>
    </tr>
    <tr>
      <td width="185"><b><font size="3" face="Verdana">Unit Number :</font></b></td>
      <td width="625"><font size="3" face="Verdana" color="brown"><b> </b></font></td>
    </tr>
    <tr>
      <td width="185"><b><font size="3" face="Verdana">Payment Mode :</font></b></td>
      <td width="625"><font size="3" face="Verdana"> </font></td>
    </tr>
    <tr>
      <td width="185"><b><font size="3" face="Verdana">Amount :</font></b></td>
      <td width="625"><font size="3" face="Verdana"><i>= /=</i></font></td>
    </tr>
 
<tr>
      <td width="185"><b><font size="3" face="Verdana">Cheque No :</font></b></td>
      <td width="625"><font size="3" face="Verdana"> </font></td>
    </tr>
    <tr>
      <td width="185"><b><font size="3" face="Verdana">Drawn On :</font></b></td>
      <td width="625"><font size="3" face="Verdana">< </font> <b><font size="3" face="Verdana">Cheque Date :</font></b>  <font size="3" face="Verdana"></font></td>
    </tr>
	<!--
    <tr>
      <td width="185"><b><font size="3" face="Verdana">Cheque Date :</font></b></td>
      <td width="625"><font size="3" face="Verdana"><% response.write request.form("chequedate") %></font></td>
    </tr> -->
	

    <tr>
      <td width="185"><b><font size="3" face="Verdana">Payorder No :</font></b></td>
      <td width="625"><font size="3" face="Verdana"> </font></td>
    </tr>
     <tr>
      <td width="185"><b><font size="3" face="Verdana">Drawn On :</font></b></td>
      <td width="625"><font size="3" face="Verdana"> </font> <b><font size="3" face="Verdana">Payorder Date :</font></b>  <font size="3" face="Verdana"> </font></td>
    </tr>
	<!--
    <tr>
      <td width="185"><b><font size="3" face="Verdana">Payorder Date :</font></b></td>
      <td width="625"><font size="3" face="Verdana"><% response.write request.form("chequedate") %></font></td>
    </tr>
	-->

<tr>
      <td width="185"><b><font size="3" face="Verdana">Total Balance :</font></b></td>
      <td width="625"><font size="6" face="Verdana"><b>

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
      <td width="625"><font size="3" face="Verdana"><b>

		<img src="http://www.yarntomato.com/percentbarmaker/button.php?barPosition=&amp;leftFill=" alt="Result" id="generated" width="102" height="15">
		
		</b></font></td>
    </tr>
	
	
	
	
	    <tr>
      <td width="185"><b><font size="3" face="Verdana">Completion Date:</font></b></td>
      <td width="625"><font size="3" face="Verdana"><b>[PAY BEFORE ]</b></font></td>
    </tr>
	
 <tr>
      <td width="185"><b><font face="Verdana" size="3">Special Note :</font></b></td>
      <td width="625"><font size="3" face="Verdana"> </font></td>
    </tr>


    <tr style="border:1px dashed black;">
      <td width="185"><b><font size="2" face="Verdana"></font></b></td>
      <td width="625"><font size="2" face="Verdana"><i></i></font></td>
    </tr>
	
	    <tr>
      <td width="185"><b><font size="2" face="Verdana"></font></b></td>
      <td width="625"><font size="2" face="Verdana"><b></b></font></td>
    </tr>
	
	
	    <tr style="border:1px dashed black;">
      <td width="185"><b><font size="2" face="Verdana"></font></b></td>
      <td width="625"><font size="2" face="Verdana"><i></i></font></td>
    </tr>

    <tr>
      <td width="185"><b><font size="2" face="Verdana"></font></b></td>
      <td width="625"><font size="2" face="Verdana"><b></b></font></td>
    </tr>
	
	    <tr style="border:1px dashed black;">
      <td width="185"><b><font size="2" face="Verdana"></font></b></td>
      <td width="625"><font size="2" face="Verdana"><i></i></font></td>
    </tr>

    <tr>
      <td width="185"><b><font size="2" face="Verdana"></font></b></td>
      <td width="625"><font size="2" face="Verdana"><b></b></font></td>
    </tr>
	
	    <tr style="border:1px dashed black;">
      <td width="185"><b><font size="2" face="Verdana"></font></b></td>
      <td width="625"><font size="2" face="Verdana"><i></i></font></td>
    </tr>
	
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
    <font face="Verdana"> </font></td>
  </tr>

</table>
<br>
<table border="0" cellpadding="0" cellspacing="2" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber2">
   
  
  

<tr>
<td width="100%" align="center"><font size="1" face="Verdana">
Please clear your all your Payments as per Schedule on Booking Letter before .
</font>
</td>
</tr>

<tr>
<td width="100%" align="center">
<font size="1" face="Verdana"><b>
Total Sale Price is excluded from Transfer fee, stamps duty, registration charges, K.E.S.C meter charges, PMT, HTc, LT, KE OWN, KE Material, SSGC, All GAS Work, KESC Work, and all other utility charges, CVT, transfer fees, electricity, Property Tax , KW&SB, EXCISE & Taxation, Water Connection, Registrar Office, Owns, Documentation, Lawyer charges are extra.
</b></font></td>


	<tr>
<td width="100%" align="center">
<font size="1" face="Verdana"></font></td>
</tr>

		 <tr>
<td width="100%"><font size="0.5em" face="Verdana"><b><center>This receipt is valid upon Realization of Cheque!</center></b></font></td>
  
</tr>


<tr>
<td width="100%"><font size="0.5em" face="Verdana"><center>By Accepting this receipt, I/We <b> </b> acknowledge That I/We have read and understood do hereby accept all Terms & Conditions of this receipt also I/We accept/undertake to abide by it in future.</center></font></td>
  
</tr>

</table>


</center>
</div>