<?php 
    include("common.php");
?>
<head>

<style>
small {
    font-size: .7em
}

</style>

</head>

<?php 

if($_POST['mode'] == "new"){

$typed = $_POST['type'];
$dated = $_POST['date'];
$name = $_POST['name'];
$cnic = $_POST['cnic'];
$contactno = $_POST['contactno'];
$secondcontactno = $_POST['secondcontactno'];
$status = $_POST['status'];
$FlatNo = $_POST['FlatNo'];
$buyeragentname = $_POST['buyeragentname'];
$buyeragentnumber = $_POST['buyeragentnumber'];
$secondbuyeragentnumber = $_POST['secondbuyeragentnumber'];
$price = $_POST['price'];
$sellername = $_POST['sellername'];
$sellernumber = $_POST['sellernumber'];
$selleragentname = $_POST['selleragentname'];
$selleragentnumber = $_POST['selleragentnumber'];
$nominee = $_POST['nominee'];
$nomineecnic = $_POST['nomineecnic'];
$balance = $_POST['balance'];
$note = $_POST['note'];
$first = $_POST['first'];
$firstdetail = $_POST['firstdetail'];
$secondd = $_POST['second'];
$seconddetail = $_POST['seconddetail'];
$installment = $_POST['installment'];
$installmentdetail = $_POST['installmentdetail'];
$yearlyone = $_POST['yearlyone'];
$yearlyonedetail = $_POST['yearlyonedetail'];
$yearlytwo = $_POST['yearlytwo'];
$yearlytwodetail = $_POST['yearlytwodetail'];
$yearlythree = $_POST['yearlythree'];
$yearlythreedetail = $_POST['yearlythreedetail'];
$completion = $_POST['completion'];
$completiondetail = $_POST['completiondetail'];
$what = $_SESSION["user"];

$query="INSERT INTO mutation (`type`,`date`,`name`,`cnic`,`contactno`,`secondcontactno`,`status`,`flatno`,
                              buyeragentname,buyeragentnumber,secondbuyeragentnumber,price,sellername,
                              sellernumber,selleragentname,selleragentnumber,nominee,nomineecnic,balance,
                              note,`first`,firstdetail,second,seconddetail,installment,installmentdetail,
                              yearlyone,yearlyonedetail,yearlytwo,yearlytwodetail,yearlythree,yearlythreedetail,
                              completion,completiondetail,what) 
                       VALUES ('$typed','$dated','$name','$cnic','$contactno','$secondcontactno','$status',
                              '$FlatNo','$buyeragentname','$buyeragentnumber','$secondbuyeragentnumber',
                              '$price','$sellername','$sellernumber','$selleragentname','$selleragentnumber',
                              '$nominee','$nomineecnic','$balance','$note','$first','$firstdetail','$secondd',
                              '$seconddetail','$installment','$installmentdetail','$yearlyone','$yearlyonedetail',
                              '$yearlytwo','$yearlytwodetail','$yearlythree','$yearlythreedetail','$completion',
                              '$completiondetail','$what')";
 
$result = mysqli_query($connect,$query);

}

if($_POST['mode'] == "edit"){

$id = $_POST['id'];
$typed = $_POST['type'];
$dated = $_POST['date'];
$name = $_POST['name'];
$cnic = $_POST['cnic'];
$contactno = $_POST['contactno'];
$secondcontactno = $_POST['secondcontactno'];
$status = $_POST['status'];
$FlatNo = $_POST['FlatNo'];
$buyeragentname = $_POST['buyeragentname'];
$buyeragentnumber = $_POST['buyeragentnumber'];
$secondbuyeragentnumber = $_POST['secondbuyeragentnumber'];
$price = $_POST['price'];
$sellername = $_POST['sellername'];
$sellernumber = $_POST['sellernumber'];
$selleragentname = $_POST['selleragentname'];
$selleragentnumber = $_POST['selleragentnumber'];
$nominee = $_POST['nominee'];
$nomineecnic = $_POST['nomineecnic'];
$balance = $_POST['balance'];
$note = $_POST['note'];
$first = $_POST['first'];
$firstdetail = $_POST['firstdetail'];
$secondd = $_POST['second'];
$seconddetail = $_POST['seconddetail'];
$installment = $_POST['installment'];
$installmentdetail = $_POST['installmentdetail'];
$yearlyone = $_POST['yearlyone'];
$yearlyonedetail = $_POST['yearlyonedetail'];
$yearlytwo = $_POST['yearlytwo'];
$yearlytwodetail = $_POST['yearlytwodetail'];
$yearlythree = $_POST['yearlythree'];
$yearlythreedetail = $_POST['yearlythreedetail'];
$completion = $_POST['completion'];
$completiondetail = $_POST['completiondetail'];
$what = $_SESSION["user"];

$update_query="UPDATE `mutation` Set `type`='$typed' ,`date`='$dated' ,`name`='$name' ,`cnic`='$cnic' ,
                            `contactno`='$contactno' ,`secondcontactno`='$secondcontactno' ,`status`='$status' ,
                            `flatno`='$FlatNo' ,`buyeragentname`='$buyeragentname' ,`buyeragentnumber`='$buyeragentnumber' ,
                            `secondbuyeragentnumber`='$selleragentnumber' ,`price`='$price' ,`sellername`='$sellername' ,
                            `sellernumber`='$sellernumber' ,`selleragentname`='$selleragentname' ,`selleragentnumber`='$selleragentnumber' ,
                            `nominee`='$nominee' ,`nomineecnic`='$nomineecnic' ,`balance`='$balance' ,`note`='$note' ,`first`='$first' ,
                            `firstdetail`='$firstdetail' ,`second`='$secondd' ,`seconddetail`='$seconddetail' ,`installment`='$installment' ,
                            `installmentdetail`='$installmentdetail' ,`yearlyone`='$yearlyone' ,`yearlyonedetail`='$yearlyonedetail' ,
                            `yearlytwo`='$yearlytwo' ,`yearlytwodetail`='$yearlytwodetail' ,`yearlythree`='$yearlythree' ,`yearlythreedetail`='$yearlythreedetail' ,
                            `completion`='$completion' ,`completiondetail`='$completiondetail' WHERE  `mutation`.`id` ='$id' and `mutation`.`what` ='$what' ";
 
$result = mysqli_query($connect,$update_query);

}

?>


<body topmargin="0" leftmargin="0">
<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber3" width="100%">
  <tr>
    <td width="100%">
    <p align="center"><img border="0" src="<?php echo $_SESSION['logo'];?>"></td>
  </tr>
</table>
<br>
<div align="center">
  <center>
  
  <!--
  <table  style="border:1px dashed black;" border="0" cellpadding="0" style="border-collapse: collapse" width="100%" cellspacing="3">
  -->
  
<table background="https://chart.googleapis.com/chart?chl=<?php echo $_SESSION['project']?>%0A<?php echo date("d/m/Y");?>%0A<?php echo $name;?>%0A<?php echo $status ;?>%0A<?php echo $FlatNo ;  if($price !== "") { ;?>%0APrice: <?php echo $price?><?php } ?><?php if($balance !== "") { ;?>%0ABuilder Balance:<?php echo $balance?> <?php } ?>&chs=125x125&cht=qr&chld=H%7C0" border="0" cellpadding="0" cellspacing="3" style="border:1px dashed black; background-repeat:no-repeat; background-position:top right; background-size: 125px 125px;" width="100%">
    <?php 
      if (!$dated == "" ) {
    ?>
	   <tr>
      <td width="185" style="border:1px dashed black;" ><b><font face="Verdana" size="1.5">Date :</font></b></td>
      <td width="625" style="border:1px dashed black;" ><font face="Verdana" size="1.5"><?php  echo date("d/m/Y"); ?></font> <b><font face="Verdana" size="1.5">Type :</font></b><font size="2" face="Verdana"><b><?php echo $typed;?></b></font></td>
    </tr>

    <?php } ?>
<!--
	 <% if typed <> "" then %>
	  <tr>
      <td width="185" style="border:1px dashed black;" ><b><font face="Verdana" size="1.5">Type :</font></b></td>
      <td width="625" style="border:1px dashed black;" ><font size="2" face="Verdana"><%=typed%></font></td>
    </tr>
	<% end if %>
	-->
	  
  <?php if (!$name == "" ) { ?>		   
    <tr>
      <td width="185" style="border:1px dashed black;" ><b><font face="Verdana" size="1.5">Name :</font></b></td>
  <td width="625" style="border:1px dashed black;" ><font face="Verdana" size="1.5"><?php echo $name;?></font> <?php if (!$cnic == "" ) { ?><b><font face="Verdana" size="1.5">CNIC :</font></b><font face="Verdana" size="1.5"><?php echo $cnic;?></font><?php } ?> <?php if (!$contactno == "" ) { ?><b><font face="Verdana" size="1.5"> Contact # :</font></b><font face="Verdana" size="1.5"><?php echo $contactno;?></font><?php } ?></td>
    </tr>	
  <?php }?>
	<!--
	  <% if cnic <> "" then %>
		   <tr>
      <td width="185" style="border:1px dashed black;" ><b><font face="Verdana" size="1.5">CNIC :</font></b></td>
      <td width="625" style="border:1px dashed black;" ><font face="Verdana" size="1.5"><%=cnic%></font></td>
    </tr>	<% end if %>
	
	
	  <% if contactno <> "" then %>
		   <tr>
      <td width="185" style="border:1px dashed black;" ><b><font face="Verdana" size="1.5">Contact # :</font></b></td>
      <td width="625" style="border:1px dashed black;" ><font face="Verdana" size="1.5"><%=contactno%></font></td>
    </tr>	<% end if %>
	-->
	
  <?php if (!$status == "" ) { ?>
		   <tr>
      <td width="185" style="border:1px dashed black;" ><b><font face="Verdana" size="1.5">Status :</font></b></td>
      <td width="625" style="border:1px dashed black;" ><font face="Verdana" size="1.5"><b><?php echo $status;?></b></font>
	  
    <?php if (!$FlatNo == "" ) { ?><font face="Verdana" size="1.5"> Unit # :</font><font face="Verdana" size="1.5"><b><?php echo $FlatNo;?></b></font><?php } ?>
      <?php if (!$price == "" ) { ?><font face="Verdana" size="1.5"> Agreed Price :</font><font face="Verdana" size="1.5"><b><?php echo $price;?></b></font><?php } ?>
	  
	  </td>
  </tr>	<?php } ?>
	<!--
	
	  <% if flatno <> "" then %>
		  

		  <tr>
      <td width="185" style="border:1px dashed black;" ><b><font face="Verdana" size="1.5">Unit No :</font></b></td>
      <td width="625" style="border:1px dashed black;" ><font size="2" face="Verdana"><b><%=flatno%></b></font></td>
    </tr>
		<% end if %>
		-->
		
    <?php if (!$buyeragentname == "" ) { ?>
			  <tr>
      <td width="185" style="border:1px dashed black;" ><b><font face="Verdana" size="1.5">Buyer's Agent Name :</font></b></td>
      <td width="625" style="border:1px dashed black;" ><font face="Verdana" size="1.5"><?php echo $buyeragentname;?></font> <?php if (!$buyeragentnumber == "" ) { ?><b><font face="Verdana" size="1.5">Contact # :</font></b><font face="Verdana" size="1.5"><?php echo $buyeragentnumber;?></font><?php } ?></td>
    </tr>
      <?php } ?>
				
			
	<!--			
	  <% if price <> "" then %>
	  
			<tr>
      <td width="185" style="border:1px dashed black;" ><b><font face="Verdana" size="1.5">Price Agreed :</font></b></td>
      <td width="625" style="border:1px dashed black;" ><font face="Verdana" size="1.5"><%=FormatNumber(price,-0)%></font></td>
    </tr>
		<% end if %>
		-->
		
	  <?php if (!$selleragentname == "" ) { ?>
	  
	 			<tr>
      <td width="185" style="border:1px dashed black;" ><b><font face="Verdana" size="1.5">Seller Agent Name :</font></b></td>
    <td width="625" style="border:1px dashed black;" ><font face="Verdana" size="1.5"><?php echo $selleragentname;?></font> <?php if (!$selleragentnumber == "" ) { ?><b><font face="Verdana" size="1.5">Contact # :</font></b><font face="Verdana" size="1.5"><?php echo $selleragentnumber;?></font><?php } ?></td>
    </tr>
    <?php } ?>
				
				
	  <?php if (!$sellername == "" ) { ?>
	  
	
	 	 			<tr>
      <td width="185" style="border:1px dashed black;" ><b><font face="Verdana" size="1.5">Seller Name :</font></b></td>
    <td width="625" style="border:1px dashed black;" ><font face="Verdana" size="1.5"><?php echo $sellername;?></font> <?php if (!$sellernumber == "" ) { ?><b><font face="Verdana" size="1.5">Contact # :</font></b><font face="Verdana" size="1.5"><?php echo $sellernumber;?></font><?php } ?></td>
    </tr>
    <?php } ?>
				
				
				
				
    <?php if (!$nominee == "" ) { ?>	  
	  
	 
	 	 	 			<tr>
      <td width="185" style="border:1px dashed black;" ><b><font face="Verdana" size="1.5">Nominee Name :</font></b></td>
    <td width="625" style="border:1px dashed black;" ><font face="Verdana" size="1.5"><?php echo $nominee;?></font> <?php if (!$nomineecnic == "" ) { ?><b><font face="Verdana" size="1.5">CNIC/Contact #:</font></b><font face="Verdana" size="1.5"><?php echo $nomineecnic;?></font><?php } ?></td>
    </tr>
    <?php } ?>
				
				
		
				
	  <?php if (!$balance == "" ) { ?>
	  
	 
	 	 	 	 			<tr>
      <td width="185" style="border:1px dashed black;" ><b><font face="Verdana" size="1.5">Builder Balance :</font></b></td>
      <td width="625" style="border:1px dashed black;" ><font face="Verdana" size="1.5"><?php echo $balance;?></font></td>
    </tr>	<?php } ?>
				
    <?php if (!$note == "" ) { ?>
	  
	 	 	 	 	 			<tr>
      <td width="185" style="border:1px dashed black;" ><b><font face="Verdana" size="1.5">Note :</font></b></td>
      <td width="625" style="border:1px dashed black;" ><font face="Verdana" size="1.5"><small><?php echo $note;?></small></font></td>
    </tr>
      <?php } ?>
	
	  	 	 	 	 	 			<tr>
      <td width="185" style="border:1px dashed black;" ></td>
      <td width="625" style="border:1px dashed black;" ><b><font face="Verdana" size="2"><b>** PAYMENT SCHEDULE **</b></font></b></td>
    </tr>
	  <?php if (!$first == "" ) { ?>
		 	 	 	 	 			<tr>
      <td width="185" style="border:1px dashed black;" ><b><font face="Verdana" size="1.5"><?php echo $first;?></font></b></td>
      <td width="625" style="border:1px dashed black;" ><font face="Verdana" size="1.5"><?php echo $firstdetail;?></font></td>
    </tr>
	
    <?php } ?>
	
      <?php if (!$secondd == "" ) { ?>
	<tr>
      <td width="185" style="border:1px dashed black;" ><b><font face="Verdana" size="1.5"><?php echo $secondd;?></font></b></td>
      <td width="625" style="border:1px dashed black;" ><font face="Verdana" size="1.5"><?php echo $seconddetail;?></font></td>
    </tr>

    <?php } ?>

		
    <?php if (!$installment == "" ) { ?>
	<tr>
      <td width="185" style="border:1px dashed black;" ><b><font face="Verdana" size="1.5"><?php echo $installment;?></font></b></td>
      <td width="625" style="border:1px dashed black;" ><font face="Verdana" size="1.5"><?php echo $installmentdetail;?></font></td>
    </tr>
    <?php } ?>

		
    <?php if (!$yearlyone == "" ) { ?>
	<tr>
      <td width="185" style="border:1px dashed black;" ><b><font face="Verdana" size="1.5"><?php echo $yearlyone;?></font></b></td>
      <td width="625" style="border:1px dashed black;" ><font face="Verdana" size="1.5"><?php echo $yearlyonedetail;?></font></td>
    </tr>
    <?php } ?>

		
    <?php if (!$yearlytwo == "" ) { ?>
	<tr>
      <td width="185" style="border:1px dashed black;" ><b><font face="Verdana" size="1.5"><?php echo $yearlytwo;?></font></b></td>
      <td width="625" style="border:1px dashed black;" ><font face="Verdana" size="1.5"><?php echo $yearlytwodetail;?></font></td>
    </tr>
    <?php } ?>
	 	
    <?php if (!$yearlythree == "" ) { ?>
	<tr>
      <td width="185" style="border:1px dashed black;" ><b><font face="Verdana" size="1.5"><?php echo $yearlythree;?></font></b></td>
      <td width="625" style="border:1px dashed black;" ><font face="Verdana" size="1.5"><?php echo $yearlythreedetail;?></font></td>
    </tr>

    <?php } ?>

    <?php if (!$completion == "" ) { ?>
	<tr>
      <td width="185" style="border:1px dashed black;" ><b><font face="Verdana" size="1.5"><?php echo $completion;?></font></b></td>
      <td width="625" style="border:1px dashed black;" ><font face="Verdana" size="1.5"><?php echo $completiondetail;?></font></td>
    </tr>
    <?php } ?>
	 
	 
	 
	 
  </table>
  </center>
</div>

<div align="center">
  <center>

<table style="border:1px dashed black;" border="0" cellpadding="0" cellspacing="5" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber2">
<tr>
<td width="100%" align="left">
<font size="1" face="Verdana">
<b>TERMS AND CONDITIONS</b>
<ul style="list-style-type:square;">
<small>
<li>The possession of the Unit will stay with Builder, until full payment is received and Sub Lease is executed.</li>
<li>The allottee shall not carry-out any changes, alterations, additions or any holes involving structure of the building within the premises allotted to him/her. (The structure includes columns, slabs and beams) without the consent of the builder.</li>
<li>The payment of installments shall be made by buyers according to the Mode of payment schedule and within 15 days of the issue of Demand Call/SMS/Whatsapp which will be issued to the provided contact number of Allottee or his/her Estate Agent. If the payment is not received within the specified period, a Reminder will be issued informing him/her to make the payment within 7 days of the [Reminder Notice]. If still the payment is not received within the specified period, the allotment/allocation of the Unit will be cancelled and the amount deposited by the allottee, will be refunded after the said Unit is re-booked to a new buyer and within 30 days of the payment received from the new allottee. At the time of refunded 20% (twenty percent) of the total amount of the sale consideration of the Unit will be deducted as Service charges.</li>
<li>That no claim for damage or otherwise will be made to the Company if the company interrupts the construction work or is unable to keep the time schedule due to force majeure, war, natural calamities, civil unrest, strikes, go-slow by the labor, non availability of government utility services or changes in the fiscal policies of the Government or any other causes.</li>
<li>The builder shall collect 12 months [advance amount] under the head of [Maintenance charges] at the time of giving possession of Unit and shall be responsible for service/maintenance of the project for a period of 1 year after its completion. The service under maintenance include payment of electric bills of corridor/passage/monthly salary of chowkidars/security guards/sweepers/plumber etc. Employed for common and General service and proper upkeep/cleanliness of the project. However, proper account of [Maintenance charges] shall be maintained by the builder and the same shall be transferred to the Society/Association of the Allotted as and when it is formed.</li>
<li><b>In case any allottee desires to cancel or get refund of the amount deposited towards the Unit he/she has booked, the same will be refunded to him/her after a prospective purchaser available and within six month of payment mode by the new (Second) purchaser. At the time of refund 20% (twenty percent) of the total amount of sale consideration of the Unit will be deducted as Service Charges.</b></li>
<li>If for any reason the project is abandoned, the Company will refund the installments  received from the applicant within Six months from the announcement to this effect. It is clearly understood that in such eventuality, the applicant will not claim any interest or damage of whatsoever nature from the company.</li>
<li>Our prices are fixed and there will be no escalation in the prices provided installments are paid by the allottee/buyers strictly in accordance with the schedule of payment.</li>
<li>The Allottee/buyer shall abide by the existing rules and regulation, condition requirements etc. Laid down by the builder or those which may be prescribed from time to time by the relevant authorities.</li>
<li>I Agree that all Pictures,Room Dimensions, Sizes, Plans, Layouts, Information, Data and details included in the project broucher/planning as indicatives only and may change at any time up to the final "as built" status in accordance with final designs of the project and regulatory approvals and planning permission.</li>
<li>I Agree to pay Surcharges , Late Payment / installements Charges, late payment/installements panelties in case of delay in payments / Installements on whatsoever the amount / percetange decided by the Builder.</li>
<li>The builder retains and reserves the right at all time to construct additional Unit, move unit to any another floor and make any changes in design,sizes and specification at the sole discretion of the builder.</li>
<li>That prospective Sub-Lessee/Allottee/Buyer/Vendor shall not have any right of whatsoever nature or any part thereof or suffer the same over the use of advertising or for display of any advertisement, poster, notice, neon sign, sign board etc. which shall be exclusive right of the Lessees over which they shall have the right to enjoy benefits of all the nature.</li>
<li>That in case Buyer/Vendee fails to pay three regularly installments / payments as per schedule then the Vendor/Builder forfeit 20% amount of the total sale consideration and flat shall be cancelled and the balance payment will be returned by the Builder to the Allottee within six (06) months. Vendee will not raise any claim or any objection in any concerned authorities.</li>
<li>Whenever Builder intimated that you have execute the SUB-LEASE DEED of the above Flat on your own name/nominee. Kindly execute Otherwise we have no responsible in case any Government Authorities, Federal Board of Revenue (FBR), Sindh Building Control Authority (SBCA), concerned Sub-Registrar, Karachi, or any kinds of Courts including Civil Court(s), High Court of Sindh, Supreme Court of Pakistan or any other department or authorizes any objection be raised against the execution of Sub-Lease of the said Flat.</li>
<li>Total Sale Price is excluded from Transfer fee, stamps duty, registration charges, K.E.S.C meter charges, PMT, HTc, LT, KE OWN, KE Material, SSGC, All GAS Work, KESC Work, and all other utility charges, CVT, transfer fees, electricity, Property Tax , KW&SB, EXCISE & Taxation, Water Connection, Registrar Office, Owns, Documentation, Lawyer charges are extra.</li>
<li>That the Allottee/prospective Purchaser (s) / prospective Sub-Lessee hereby undertake not to object over the dimensions of room, plans, No. Of rooms/bathrooms, further accepts that the dimensions of the unit may differ or may contain services, ducts and it may differ from the plan been issued by the competent Authority, from the actual as built on site or shown in plan attached with the Sub-Lease.</li>


</small>
</ul>
</font>
<!--
<font size="1" face="Verdana"><b>Important Note:</b><i>
That in case Buyer/Vendee fails to pay three regularly installments / payments as per schedule then the Vendor/Builder forfeit 20% amount of the total sale consideration and flat shall be cancelled and the balance payment will be returned by the Builder to the Allottee within six (06) months. Vendee will not raise any claim or any objection in any concerned authorities.
</i></font>
-->


</td>
</tr>

<!--

<tr>
<td width="100%" align="center">
<font size="1" face="Verdana">
Total Sale Price is excluded from Transfer fee, stamps duty, registration charges, K.E.S.C meter charges, PMT, HTc, LT, KE OWN, KE Material, SSGC, All GAS Work, KESC Work, and all other utility charges, CVT, transfer fees, electricity, Property Tax , KW&SB, EXCISE & Taxation, Water Connection, Registrar Office, Owns, Documentation, Lawyer charges are extra.
</font></td>
</tr>

-->
</table>

  <table border="0" cellpadding="0" style="border-collapse: collapse" width="100%" cellspacing="0">
	 	 <tr>
      <td width="100%"><font size="0.5em" face="Verdana"><center>By Accepting this letter, I/We <b><?php echo $name;?></b> acknowledge That I/We have read and understood do hereby accept all Terms & Conditions of this booking letter also I/We accept/undertake to abide by it in future.</center></font></td>
    <!--  
	  <td width="50%"><font size="0.5em" face="Verdana"><p style="text-align:center">This is a computerized generated document, does not require Signature</font><br><img src="http://qrfree.kaywa.com/?l=1&s=8&d=<%=session("project") %>%0A<%=name%>%0A<%=flatno%>%0A<%=status%>" height="50" width="50"></p></td>
    -->
	
	</tr>
	</table>





</div>
</body>