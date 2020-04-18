<?php 
    include("common.php");
?>
<?php 
  $flatno = $_GET['flatno'];
  $id = $_GET['id'];
  
  if ($_SESSION['user'] == "") {
        header('location:default.php');
    }
?>

<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=WINDOWS-1252">
<title>Mutation - <?php echo $_SESSION['project'];?> </title>

<b><font size="2" face="Verdana" color="#800000"><center><?php echo $_SESSION['project'];?></center></font></b>

</head>

<body>

<p align="center"><font face="Verdana"><b><font size="5">Edit Mutation Voucher</font></b><br>
</font></p>
<br>

<?php 

$query = "SELECT * FROM mutation WHERE `flatno` = '$flatno' AND ID = '$id' AND what = '$_SESSION[user]'";
$result = mysqli_query($connect,$query);

$row = mysqli_fetch_assoc($result);

?>

<form method="POST" style="font-family: Verdana; font-size: 12pt" action="mutation_add.php" name="formcheck" onsubmit="return formCheck(this);">
  <div align="center">
    <center>
    <table border="1" cellpadding="3" cellspacing="3" style="border-collapse: collapse" width="80%" id="AutoNumber1">
      <tr>
        <td width="23%"><font size="2">Date :-</font></td>
        <td width="43%">
        <input type="text" name="date" size="14" style="font-family: Verdana; font-size: 10pt" value="<?php echo date("d/m/Y");?>"></td>
      </tr>
      <tr>
        <td width="23%"><font face="Verdana" size="2">Type :-</font></td>
        <td width="43%">
		<input type="text" name="type" size="36" value="<?php echo $row['type'];?>" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>
	        <tr>
        <td width="23%"><font face="Verdana" size="2">Customer Name :-</font></td>
        <td width="43%">
		<input type="text" name="name" size="36" value="<?php echo $row['name'];?>" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>
	  
	  	        <tr>
        <td width="23%"><font face="Verdana" size="2">Customer CNIC :-</font></td>
        <td width="43%">
		<input type="text" name="cnic" size="36" value="<?php echo $row['cnic'];?>" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>
	  	  	        <tr>
        <td width="23%"><font face="Verdana" size="2">Contact No :-</font></td>
        <td width="43%">
		<input type="text" name="contactno" size="20" value="<?php echo $row['contactno'];?>" style="font-family: Verdana; font-size: 10pt"> 2nd No. <input type="text" name="secondcontactno" size="20" value="<?php echo $row['secondcontactno'];?>" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>
	  
	  	        <tr>
        <td width="23%"><font face="Verdana" size="2">Status :-</font></td>
        <td width="43%">
<select size="1" name="status" style="font-family: Verdana; font-size: 10pt" onChange="javascript:Enble();">
        <option value="<?php echo $row['status'];?>"><?php echo $row['status'];?></option>
		<option value="Booking">Booking</option>
        <option value="Resale">Resale</option>
        </select>
		</td>
      </tr>
	  
	  
      <tr>
        <td width="23%"><font face="Verdana" size="2">Unit No :-</font></td>
        <td width="43%"><select size="1" name="FlatNo" style="font-family: Verdana; font-size: 10pt">
<option value="<?php echo $row['flatno'];?>"><?php echo $row['flatno'];?> 
</option>
</select></td>
      </tr>
      
      <tr>
        <td width="23%"><font face="Verdana" size="2">Buyer Agent Name:-</font></td>
        <td width="43%">
        <input type="text" name="buyeragentname" value="<?php echo $row['buyeragentname'];?>" size="36" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>
	  
	     <tr>
        <td width="23%"><font face="Verdana" size="2">Buyer Agent Number :-</font></td>
        <td width="43%">
        <input type="text" name="buyeragentnumber" value="<?php echo $row['buyeragentnumber'];?>" size="20" style="font-family: Verdana; font-size: 10pt"> 2nd No.  <input type="text" name="secondbuyeragentnumber" value="<?php echo $row['secondbuyeragentnumber'];?>" size="20" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>
	  
	     <tr>
        <td width="23%"><font face="Verdana" size="2">Agreed Price :-</font></td>
        <td width="43%">
        <input type="text" name="price" size="36" value="<?php echo $row['price'];?>" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>
	  
	     <tr>
        <td width="23%"><font face="Verdana" size="2">Seller Agent Name :-</font></td>
        <td width="43%">
        <input type="text" name="selleragentname" value="<?php echo $row['selleragentname'];?>" size="36" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>
	  
	     <tr>
        <td width="23%"><font face="Verdana" size="2">Seller Agent Number:-</font></td>
        <td width="43%">
        <input type="text" name="selleragentnumber" value="<?php echo $row['selleragentnumber'];?>" size="36" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>
	  
	  	     <tr>
        <td width="23%"><font face="Verdana" size="2">Seller Name:-</font></td>
        <td width="43%">
        <input type="text" name="sellername" size="36" value="<?php echo $row['sellername'];?>" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>
	  
	  	     <tr>
        <td width="23%"><font face="Verdana" size="2">Seller Number:-</font></td>
        <td width="43%">
        <input type="text" name="sellernumber" value="<?php echo $row['sellernumber'];?>" size="36" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>
	  
	  
      <tr>
        <td width="23%"><font face="Verdana" size="2">Nominee :-</font></td>
        <td width="43%">
        <input type="text" name="nominee" value="<?php echo $row['nominee'];?>" size="28" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>
     	  
      <tr>
        <td width="23%"><font face="Verdana" size="2">Nominee CNIC/Contact :-</font></td>
        <td width="43%">
        <input type="text" name="nomineecnic" value="<?php echo $row['nomineecnic'];?>" size="28" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>	  
      <tr>
        <td width="23%"><font face="Verdana" size="2">Balance :-</font></td>
        <td width="43%">
        <input type="text" name="balance" size="28" value="<?php echo $row['balance'];?>" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>	  
      <tr>
        <td width="23%"><font face="Verdana" size="2">Note :-</font></td>
        <td width="43%">
       
<?php 
$leadexplain= $row['note'];
if ($leadexplain == ""){
      $leadexplain = $leadexplain;
    }
?>
	   
 <textarea rows="4" name="note" cols="50"><?php echo $leadexplain?></textarea> 
	  
		</td>
      </tr>

	    <tr>
        <td width="23%"><font face="Verdana" size="2">First Payment :-</font></td>
        <td width="43%">
       Amount: <input type="text" name="first"  id="first" value="<?php echo $row['first'];?>" size="28" style="font-family: Verdana; font-size: 10pt">
	   <br>
	   Detail : 
	   
	
 <textarea rows="4" name="firstdetail" cols="50"><?php echo $row['firstdetail'];?></textarea> 
	  
	   
	   
	   </td>
      </tr>
	  
	  	    <tr>
        <td width="23%"><font face="Verdana" size="2">Second Payment :-</font></td>
        <td width="43%">
       Amount: <input type="text" name="second"  id="second" value="<?php echo $row['second'];?>" size="28" style="font-family: Verdana; font-size: 10pt">
	   <br>
	   Detail : 
	   
	     <textarea rows="4" name="seconddetail" cols="50"><?php echo $row['seconddetail'];?></textarea> 
	  
	   
	   
	   </td>
      </tr>
	 	  
	  	    <tr>
        <td width="23%"><font face="Verdana" size="2">Installment :-</font></td>
        <td width="43%">
       Amount: <input type="text" name="installment"  id="third" value="<?php echo $row['installment'];?>" size="28" style="font-family: Verdana; font-size: 10pt">
	   <br>
	   Detail : 
	
	     <textarea rows="4" name="installmentdetail" cols="50"><?php echo $row['installmentdetail'];?></textarea> 
	   
	   
	   </td>
      </tr>
	  
	  	  	    <tr>
        <td width="23%"><font face="Verdana" size="2">Yearly One :-</font></td>
        <td width="43%">
       Amount: <input type="text" name="yearlyone"  id="fourth" value="<?php echo $row['yearlyone'];?>" size="28" style="font-family: Verdana; font-size: 10pt">
	   <br>
	   Detail : 
	
	     <textarea rows="4" name="yearlyonedetail" cols="50"><?php echo $row['yearlyonedetail'];?></textarea> 
	   
	   
	   </td>
      </tr>
	  
	  	  	  	    <tr>
        <td width="23%"><font face="Verdana" size="2">Yearly Two :-</font></td>
        <td width="43%">
       Amount: <input type="text" name="yearlytwo"   id="fifth" value="<?php echo $row['yearlytwo'];?>" size="28" style="font-family: Verdana; font-size: 10pt">
	   <br>
	   Detail :

	  
	      <textarea rows="4" name="yearlytwodetail" cols="50"><?php echo $row['yearlytwodetail'];?></textarea> 
	  
	   
	   
	   </td>
      </tr>
	  
	 	  	  	    <tr>
        <td width="23%"><font face="Verdana" size="2">Yearly Three :-</font></td>
        <td width="43%">
       Amount: <input type="text" name="yearlythree"  id="sixth" value="<?php echo $row['yearlythree'];?>" size="28" style="font-family: Verdana; font-size: 10pt">
	   <br>
	   Detail : 
	      <textarea rows="4" name="yearlythreedetail" cols="50"><?php echo $row['yearlythreedetail'];?></textarea> 
	  
	   
	   
	   </td>
      </tr>
	  
	 	  	  	    <tr>
        <td width="23%"><font face="Verdana" size="2">Completion :-</font></td>
        <td width="43%">
       Amount: <input type="text" name="completion"  id="seventh" value="<?php echo $row['completion'];?>" size="28" style="font-family: Verdana; font-size: 10pt">
	   <br>
	   Detail :
	
	       <textarea rows="4" name="completiondetail" cols="50"><?php echo $row['completiondetail'];?></textarea> 
	  
	   
	   
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
  <p align="center"><font face="Verdana"><font size="2"><br>
  <br>
  <input type="hidden" id="id" name="id" value="<?php $row['id'];?>">
  <input type="hidden" id="mode" name="mode" value="edit">

  </font><input type="submit" value="Submit" style="font-family: Verdana; font-size: 10pt"><font size="2"><br>
  <br>
</font></font></p>
</form>


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