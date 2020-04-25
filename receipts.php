<?php 
  include('common.php');
?>

 
<?php
$name = isset($_GET["name"]) ? $_GET["name"]:"";
$unitid = isset($_GET["unitid"]) ? $_GET["unitid"]:"";
$rebate =isset($_GET["rebate"]) ? $_GET["rebate"]:"";
?>


<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=WINDOWS-1252">
<title>Receipts <?php $_SESSION['project']?></title>



<b><font size="2" face="Verdana" color="#800000"><center><?php echo $_SESSION['project']?></center></font></b>

    


<script language="JavaScript">

 
function formCheck(formobj){
	// Enter name of mandatory fields
	var fieldRequired = Array("Name", "Date", "PaymentMode", "Amount", "FlatNo", "chequeno", "drawnon", "chequedate");
	// Enter field description to appear in the dialog box
	var fieldDescription = Array("Name", "Date", "Payment Mode", "Amount", "FlatNo", "Cheque Number", "Bank", "Cheque Date");
	// dialog message
	var alertMsg = "Please complete the following fields:\n";
	
	var l_Msg = alertMsg.length;
	
	for (var i = 0; i < fieldRequired.length; i++){
		var obj = formobj.elements[fieldRequired[i]];
		if (obj){
			switch(obj.type){
			case "select-one":
				if (obj.selectedIndex == -1 || obj.options[obj.selectedIndex].text == ""){
					alertMsg += " - " + fieldDescription[i] + "\n";
				}
				break;
			case "select-multiple":
				if (obj.selectedIndex == -1){
					alertMsg += " - " + fieldDescription[i] + "\n";
				}
				break;
			case "text":
			case "textarea":
				if (obj.value == "" || obj.value == null){
					alertMsg += " - " + fieldDescription[i] + "\n";
				}
				break;
			default:
			}
			if (obj.type == undefined){
				var blnchecked = false;
				for (var j = 0; j < obj.length; j++){
					if (obj[j].checked){
						blnchecked = true;
					}
				}
				if (!blnchecked){
					alertMsg += " - " + fieldDescription[i] + "\n";
				}
			}
		}
	}

	if (alertMsg.length == l_Msg){
		return true;
	}else{
		alert(alertMsg);
		return false;
	}
}
// -->
</script>



<script language="JavaScript">
function Enble()
 {
    if(document.forms[0].item('PaymentMode').value == 'Cash') 
    {
   		document.forms[0].item('chequeno').value = '-----';
   		document.forms[0].item('chequedate').value = '-----';
	}
	else
	{	
   		document.forms[0].item('chequeno').value = '';
   		document.forms[0].item('chequedate').value = '';
	}

 }
      </script>






</head>

<body onload="myFunction()">

<p align="center"><font face="Verdana"><b><font size="5">Receipt Voucher<br></font></b>
</font></p>
<br>
<form method="POST" style="font-family: Verdana; font-size: 12pt" action="receipt_add.php" name="formcheck" onsubmit="return formCheck(this);">
  <div align="center">
    <center>
    <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="60%" id="AutoNumber1">
      <tr>
        <td width="23%"><font size="2">Date :-</font></td>
        <td width="43%">
        <input type="text" name="date" size="14" style="font-family: Verdana; font-size: 10pt" value="<?php echo date("d/m/Y");?>"></td>
      </tr>
      <tr>
        <td width="23%"><font face="Verdana" size="2">Name :-</font></td>
        <td width="43%">
        <input type="text" name="Name" size="36" value="<?php echo $name ?>" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>
      <tr>
        <td width="23%"><font face="Verdana" size="2">Office No :-</font></td>
        <td width="43%"><select size="1" name="FlatNo" style="font-family: Verdana; font-size: 10pt">
            <?php 
              $what = $_SESSION["user"];
              $SQL2 = "SELECT `flats` FROM `flats` where `What` = '$_SESSION[user]' order by `flats` ASc";
              $rslt = mysqli_query($connect,$SQL2);
            ?> 
         
         <!-- CHECK -->
         <!-- only line 149 -->
         <option value="<?php echo $unitid;?>" selected> <?php echo $unitid;?></option>

            <?php while($row=mysqli_fetch_array($rslt)){?>

               <option value="<?php echo $row['flats']?>"><?php echo $row['flats']?></option>
 
                <?php }?>
            </select></td>
      </tr>
      
      
      
      <tr>
        <td width="23%"><font face="Verdana" size="2">Payment Mode :-</font></td>
        <td width="43%">
        <select size="1" name="PaymentMode" style="font-family: Verdana; font-size: 10pt" onChange="javascript:Enble();">
        <option value="Cheque">Cheque</option>
        <option value="Cash">Cash</option>
        <option value="Payorder">Payorder</option>
		 <option value="Online Transfer">Online Transfer</option>
        </select></td>
      </tr>
      <tr>
        <td width="23%"><font face="Verdana" size="2">Amount ( RS ) :-</font></td>
        <td width="43%">
        <input type="text" name="Amount" size="36" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>
      <tr>
        <td width="23%"><font face="Verdana" size="2">Cheque No :-</font></td>
        <td width="43%">
        <input type="text" name="chequeno" size="28" style="font-family: Verdana; font-size: 10pt"></td>
      </tr>
      <tr>
        <td width="23%"><font face="Verdana" size="2">Drawn on :-</font></td>
        <td width="43%">
       
       <select size="1" name="drawnon" style="font-family: Verdana; font-size: 10pt">
       <option value="-----">-----</option>
	   
	   <?php 
$SQL2 = "SELECT `bankname` FROM `banklist`  order by `bankname` ASc";
$rslt = mysqli_query($connect,$SQL2);

?>
<?php while($rs=mysqli_fetch_array($rslt)){?>

<option value="<?php echo $rs['bankname']?>"><?php echo $rs['bankname']?></option>
<?php } ?>	   
	   
  

  </select>
  
  
     B / W <select size="1" name="contactno" style="font-family: Verdana; font-size: 10pt">
       <option value="AB" selected>B</option>
  <option value="W">W</option>
       </td>
      </tr>
      <tr>
        <td width="23%"><font face="Verdana" size="2">Cheque Date :-</font></td>
        <td width="43%">
        <input type="text" name="chequedate" size="25" style="font-family: Verdana; font-size: 10pt" value="<?php echo date("d/m/Y");?>">

Balance <select size="1" name="shbalance" style="font-family: Verdana; font-size: 10pt">
       <option value="Show" selected>Show</option>
  <option value="Hide">Hide</option></select>

</td>
      </tr>
	  <?php if($_SESSION['user'] == "pyramid") { ?>
	    <tr>
        <td width="23%"><font face="Verdana" size="2">Rebate Taken:</font></td>
        <td width="43%">
		
 <font size="2">   


 <!-- CHECK -->
 <!-- FROM line 228 to line 253 need to check thoroughly -->
<?php 
if(isset($_GET["unitid"])){
$unitid = $_GET["unitid"];
$strsql="SELECT sum(amount) as c from `receipts` WHERE FlatNo='$unitid' AND `name` like '%reb%' and `what`='pyramid'";
$rslt1 = mysqli_query($connect,$strsql);
$Rs = mysqli_fetch_assoc($rslt1);

?>

        <?php if( isset($RS['c'])) {
    echo $RS['c'];          
      }?>
		  </font>
		  
		  
		  		<?php if ( isset($_GET['unitid']) &&  ($_GET['unitid'] == "A" || $_GET['unitid'] == "B")   && $Rs['c'] >= "1200000") { ?>
<script>
function myFunction() {
  alert("Type A/B Rebate Max 12 Lacs Already Taken");
}
</script>
        <?php } ?>

    <?php if ( isset($_GET['unitid']) &&  ($_GET['unitid'] == "A" || $_GET['unitid'] == "B") && $Rs['c'] >= "960000") { ?>
<script>
function myFunction() {
  alert("Type V Rebate Max 9.6 Lacs Already Taken");
}
</script>

      <?php } ?>	

    </td>

  </tr>
<?php }?>
<?php } ?>
		
		


        <tr>
        <td width="23%"><font face="Verdana" size="2">Special Note :-</font></td>
        <td width="43%">
        <textarea rows="3"  style="font-family: Verdana; font-size: 10pt" name="specialnote" cols="40"></textarea>
		
		<select size="1" name="specialshow" style="font-family: Verdana; font-size: 10pt">
       <option value="Show" selected>Show</option>
  <option value="Hide">Hide</option></select>
		
		</td>
      </tr>
	  
    </table>
    </center>
  </div>
  <p align="center"><font face="Verdana"><font size="2"><br>
  </font><input type="submit" value="Submit" style="font-family: Verdana; font-size: 10pt"><font size="2">
  <br>

</font></font></p>

  
 <input type="hidden" id="rebate" name="rebate" value="<?php  echo $rebate?>" /> 
  <input type="hidden" id="agname" name="agname" value="<?php echo  $name ?>" /> 

  



</form>

</body>

</html>