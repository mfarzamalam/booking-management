<?php 
  include('common.php');
?>

<?php 
  $id = $_GET['id'];

  if ($_SESSION['user'] == "") {
        header('location:default.php');
    }

?>

<?php 
$SQL2 = "SELECT * FROM `receipts` WHERE `ID` LIKE ('%$id%') AND what = '$_SESSION[user]'";
$query = mysqli_query($connect,$SQL2);

$rs = mysqli_fetch_assoc($query);

?>


<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Edit Receipts</title>




<b><font size="2" face="Verdana" color="#800000"><center><?php echo $_SESSION["project"]; ?></center></font></b>

    

<script language="JavaScript">

/***********************************************
* Required field(s) validation v1.10- By NavSurf
* Visit Nav Surf at http://navsurf.com
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/

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

<body>

<p align="center"><font face="Verdana"><b><font size="5">Edit Receipt Voucher</font></b><br>
</font></p>
<br>
<form method="POST" style="font-family: Verdana; font-size: 12pt" action="editreceiptnow.php" name="formcheck" onsubmit="return formCheck(this);">
  <div align="center">
    <center>
    <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="60%" id="AutoNumber1">
      <tr>
        <td width="23%"><font size="2">Date :-</font></td>
        <td width="43%">
        <input type="text" name="date" size="14" style="font-family: Verdana; font-size: 10pt" value="<?php echo $rs['date']; ?>"></td>
      </tr>
      <tr>
        <td width="23%"><font face="Verdana" size="2">Name :-</font></td>
        <td width="43%">
        <input type="text" name="Name" size="36" style="font-family: Verdana; font-size: 10pt" value="<?php echo $rs['Name']; ?>"></td>
      </tr>
      <tr>
        <td width="23%"><font face="Verdana" size="2">Flat No :-</font></td>
        <td width="43%"><select size="1" name="FlatNo" style="font-family: Verdana; font-size: 10pt">
<?php 
$SQL2 = "SELECT `flats` FROM `flats` where what = '$_SESSION[user]' order by `flats` ASc";
$query = mysqli_query($connect,$SQL2);

while ($fs = mysqli_fetch_array($query)){
?>
 <option value="<?php echo $fs['flats']; ?>"<? if($fs['flats'] == $rs['FlatNo']) {echo "selected"; }?>><?php echo $fs['flats']; ?></option>

 <?php } ?>

</select></td>
      </tr>
      <tr>
        <td width="23%"><font face="Verdana" size="2">Payment Mode :-</font></td>
        <td width="43%">
        <select size="1" name="PaymentMode" style="font-family: Verdana; font-size: 10pt" onChange="javascript:Enble();">
        <option value="Cheque"<? if($rs['PaymentMode'] == "Cheque") {echo "selected"; }?>>Cheque</option>
        <option value="Cash"<? if($rs['PaymentMode'] == "Cash") {echo "selected"; }?>>Cash</option>
        <option value="Payorder"<? if($rs['PaymentMode'] == "Payorder") {echo "selected"; }?>>Payorder</option>
		 <option value="Online Transfer"<? if($rs['PaymentMode'] == "Online Transfer") {echo "selected"; }?>>Online Transfer</option>
        </option>
        </select></td>
      </tr>
      <tr>
        <td width="23%"><font face="Verdana" size="2">Amount ( RS ) :-</font></td>
        <td width="43%">
        <input type="text" name="Amount" size="36" style="font-family: Verdana; font-size: 10pt" value="<?php echo $rs['Amount']; ?>"></td>
      </tr>
      <tr>
        <td width="23%"><font face="Verdana" size="2">Cheque No :-</font></td>
        <td width="43%">
        <input type="text" name="chequeno" size="28" style="font-family: Verdana; font-size: 10pt" value="<?php echo $rs['chequeno']; ?>"></td>
      </tr>
      <tr>
        <td width="23%"><font face="Verdana" size="2">Drawn on :-</font></td>
        <td width="43%">
        
        <select size="1" name="drawnon" style="font-family: Verdana; font-size: 10pt">
       
  <option value="<?php echo $rs['drawnon']; ?>" selected"><?php echo $rs['drawnon']; ?></option>
 	   <?php

$SQL2 = "SELECT `bankname` FROM `banklist`  order by `bankname` ASc";
$query = mysqli_query($connect,$SQL2);

?>
<?php while($ss = mysqli_fetch_array($query)) { ?>

<option value="<?php echo $ss['bankname']; ?>"><?php echo $ss['bankname']; ?></option>


<?php } ?>

</select>
        
        </td>
      </tr>
      <tr>
        <td width="23%"><font face="Verdana" size="2">Cheque Date :-</font></td>
        <td width="43%">
        <input type="text" name="chequedate" size="25" style="font-family: Verdana; font-size: 10pt" value="<?php echo $rs['chequedate']; ?>"></td>
      </tr>
    </table>
    </center>
  </div>
  <p align="center"><font face="Verdana"><font size="2"><br>
  <br>
  <br>
  <br>
  </font><input type="submit" value="Submit" style="font-family: Verdana; font-size: 10pt"><font size="2"><br>
  <br>
  <br>
  <br>
  <br>
  <br>
&nbsp;</font></font></p>
  <input type="hidden" name="id" value="<?php $id?>">
</form>

</body>

</html>