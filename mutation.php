<?php 
  include("common.php");
?>

<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=WINDOWS-1252">
<title> </title>



<b><font size="2" face="Verdana" color="#800000"><center> </center></font></b>

  

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script> -->


</head>

<body>

<p align="center"><font face="Verdana"><b><font size="5">Mutation Voucher</font></b><br>
</font></p>
<br>
<form method="POST" style="font-family: Verdana; font-size: 12pt" action="mutation_add.php" name="formcheck">
  <div align="center">
    <center>
    <table border="1" cellpadding="3" cellspacing="3" style="border-collapse: collapse" width="80%" id="AutoNumber1">
      <tr>
        <td width="23%"><font size="2">Date :-</font></td>
        <td width="43%">
          <input type="text" name="date" size="14" style="font-family: Verdana; font-size: 10pt" value="<?php  echo date("d/m/Y"); ?>"> 
      </td>
      </tr>
      <tr>
        <td width="23%"><font face="Verdana" size="2">Type :-</font></td>
        <td width="43%">
		<input type="text" name="type" size="36" value="" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>
	        <tr>
        <td width="23%"><font face="Verdana" size="2">Customer Name :-</font></td>
        <td width="43%">
		<input type="text" name="name" size="36" value="" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>
	  
	  	        <tr>
        <td width="23%"><font face="Verdana" size="2">Customer CNIC :-</font></td>
        <td width="43%">
		<input type="text" name="cnic" size="36" value="" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>
	  	  	        <tr>
        <td width="23%"><font face="Verdana" size="2">Contact No :-</font></td>
        <td width="43%">
		<input type="text" name="contactno" size="20" value="" style="font-family: Verdana; font-size: 10pt"> 2nd No. <input type="text" name="secondcontactno" size="20" value="" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>
	  
	  	        <tr>
        <td width="23%"><font face="Verdana" size="2">Status :-</font></td>
        <td width="43%">
<select size="1" name="status" style="font-family: Verdana; font-size: 10pt" onChange="javascript:Enble();">
        <option value="Booking">Booking</option>
        <option value="Resale">Resale</option>
        </select>
		</td>
      </tr>
	  
	  
      <tr>
        <td width="23%"><font face="Verdana" size="2">Unit No :-</font></td>
        <td width="43%"><select size="1" name="FlatNo" style="font-family: Verdana; font-size: 10pt">
        <?php 
          $query = "SELECT * FROM flats";
          $result = mysqli_query($connect,$query);

        ?>
 <option value="<?php echo $_GET['flatno'];?>" selected> <?php echo $_GET['flatno'];?> </option>
  <?php 
    while($row = mysqli_fetch_array($result)){
  ?>
    <option value="<?php $row['flats']?>" > <?php echo $row['flats']?> </option>
  <?php } ?>

</select>

</td>
      </tr>
      
      <tr>
        <td width="23%"><font face="Verdana" size="2">Buyer Agent Name:-</font></td>
        <td width="43%">
        <input type="text" name="buyeragentname" size="36" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>
	  
	     <tr>
        <td width="23%"><font face="Verdana" size="2">Buyer Agent Number :-</font></td>
        <td width="43%">
        <input type="text" name="buyeragentnumber" size="20" style="font-family: Verdana; font-size: 10pt">
		2nd No. <input type="text" name="secondbuyeragentnumber" size="20" style="font-family: Verdana; font-size: 10pt">
		</td>
      </tr>
	  
	     <tr>
        <td width="23%"><font face="Verdana" size="2">Agreed Price :-</font></td>
        <td width="43%">
        <input type="text" name="price" class="number" size="36" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>
	  
	     <tr>
        <td width="23%"><font face="Verdana" size="2">Seller Agent Name :-</font></td>
        <td width="43%">
        <input type="text" name="selleragentname" size="36" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>
	  
	     <tr>
        <td width="23%"><font face="Verdana" size="2">Seller Agent Number:-</font></td>
        <td width="43%">
        <input type="text" name="selleragentnumber" size="36" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>
	  
	  	     <tr>
        <td width="23%"><font face="Verdana" size="2">Seller Name:-</font></td>
        <td width="43%">
        <input type="text" name="sellername" size="36" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>
	  
	  	     <tr>
        <td width="23%"><font face="Verdana" size="2">Seller Number:-</font></td>
        <td width="43%">
        <input type="text" name="sellernumber" size="36" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>
	  
	  
      <tr>
        <td width="23%"><font face="Verdana" size="2">Nominee :-</font></td>
        <td width="43%">
        <input type="text" name="nominee" size="28" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>
     	  
      <tr>
        <td width="23%"><font face="Verdana" size="2">Nominee CNIC/Contact :-</font></td>
        <td width="43%">
        <input type="text" name="nomineecnic" size="28" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>	  
      <tr>
        <td width="23%"><font face="Verdana" size="2">Balance :-</font></td>
        <td width="43%">
        <input type="text" name="balance"  class="number" size="28" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>	  
      <tr>
        <td width="23%"><font face="Verdana" size="2">Note :-</font></td>
        <td width="43%">
       

 <textarea rows="4" name="note" cols="50"></textarea> 
	  
		</td>
      </tr>

	    <tr>
        <td width="23%"><font face="Verdana" size="2">First Payment :-</font></td>
        <td width="43%">
       Amount: <input type="text" id="first"  class="number" name="first" size="28" style="font-family: Verdana; font-size: 10pt">
	   <br>
	   Detail : 
	   
	
 <textarea rows="4" name="firstdetail" cols="50">Advance Down Payment for Flat confirmation within 30 days of Booking.</textarea> 
	  
	   
	   
	   </td>
      </tr>
	  
	  	    <tr>
        <td width="23%"><font face="Verdana" size="2">Second Payment :-</font></td>
        <td width="43%">
       Amount: <input type="text" id="second"  class="number" name="second" size="28" style="font-family: Verdana; font-size: 10pt">
	   <br>
	   Detail : 
	   
	     <textarea rows="4" name="seconddetail" cols="50">Upon Work Start / Digging / Piling</textarea> 
	  
	   
	   
	   </td>
      </tr>
	 	  
	  	    <tr>
        <td width="23%"><font face="Verdana" size="2">Installment :-</font></td>
        <td width="43%">
       Amount: <input type="text" id="third"  class="number" name="installment" size="28" style="font-family: Verdana; font-size: 10pt">
	   <br>
	   Detail : 
	
	     <textarea rows="4" name="installmentdetail" cols="50">36 Monthly Installments of Rs.500,000/- per month starting From Digging.</textarea> 
	   
	   
	   </td>
      </tr>
	  
	  	  	    <tr>
        <td width="23%"><font face="Verdana" size="2">Yearly One :-</font></td>
        <td width="43%">
       Amount: <input type="text" id="fourth" class="number" name="yearlyone" size="28" style="font-family: Verdana; font-size: 10pt">
	   <br>
	   Detail : 
	
	     <textarea rows="4" name="yearlyonedetail" cols="50">After 12 Month of Work Start</textarea> 
	   
	   
	   </td>
      </tr>
	  
	  	  	  	    <tr>
        <td width="23%"><font face="Verdana" size="2">Yearly Two :-</font></td>
        <td width="43%">
       Amount: <input type="text" id="fifth" class="number" name="yearlytwo" size="28" style="font-family: Verdana; font-size: 10pt">
	   <br>
	   Detail :

	  
	      <textarea rows="4" name="yearlytwodetail" cols="50">After 24 Month of Work Start</textarea> 
	  
	   
	   
	   </td>
      </tr>
	  
	 	  	  	    <tr>
        <td width="23%"><font face="Verdana" size="2">Yearly Three :-</font></td>
        <td width="43%">
       Amount: <input type="text" id="sixth" class="number" name="yearlythree" size="28" style="font-family: Verdana; font-size: 10pt">
	   <br>
	   Detail : 
	      <textarea rows="4" name="yearlythreedetail" cols="50">After 36 Month of Work Start</textarea> 
	  
	   
	   
	   </td>
      </tr>
	  
	 	  	  	    <tr>
        <td width="23%"><font face="Verdana" size="2">Completion :-</font></td>
        <td width="43%">
       Amount: <input type="text" id="seventh" class="number" name="completion" size="28" style="font-family: Verdana; font-size: 10pt">
	   <br>
	   Detail :
	
	       <textarea rows="4" name="completiondetail" cols="50">One Month Before Completion of Building.</textarea> 

	   </td>
      </tr>
	  
	   	  	  	    <tr>
        <td width="23%"></td>
        <td width="43%"><font face="Verdana" size="2"><h4 id="result"></h4></font>
	    
	  
	   
	   
	   </td>
      </tr>
	  
    </table>
    </center>
  </div>
  <input type="hidden" id="mode" name="mode" value="new">
  <p align="center"><input type="submit" value="Submit" style="font-family: Verdana; font-size: 10pt"></p>
</form>
<!-- <script>
$('input.number').keyup(function(event) {

if(event.which >= 37 && event.which <= 40) return;
  $(this).val(function(index, value) {
    return value
    .replace(/\D/g, "")
    .replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    ;
  });
});
</script>
-->

<script>
var first = document.getElementById('first');
var second = document.getElementById('second');
var third = document.getElementById('third');
var fourth = document.getElementById('fourth');
var fifth = document.getElementById('fifth');
var sixth = document.getElementById('sixth');
var seventh = document.getElementById('seventh');
var result = document.getElementById('result');

first.addEventListener("input", sum);
second.addEventListener("input", sum);
third.addEventListener("input", sum);
fourth.addEventListener("input", sum);
fifth.addEventListener("input", sum);
sixth.addEventListener("input", sum);
seventh.addEventListener("input", sum);

function sum() {
  
 var one = parseFloat(first.value) || 0;
var two = parseFloat(second.value) || 0;
var three = parseFloat(third.value) || 0;
var four = parseFloat(fourth.value) || 0;
var five = parseFloat(fifth.value) || 0;
var six = parseFloat(sixth.value) || 0;
var seven = parseFloat(seventh.value) || 0;
  
var add = one+two+three+four+five+six+seven;

result.innerHTML = "Your Sum is : " + add;

}
      </script>
</body>

</html>