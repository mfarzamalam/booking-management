<?php

    include("common.php");

?>

<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=WINDOWS-1252">
<!-- <title>Receipts <%=Session("project")%></title> -->

    


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
    <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="60%">
      
    
      <tr>
        <td width="23%"><font size="2">Date :-</font></td>
        <td width="43%">
           <input type="text" name="date" size="14" style="font-family: Verdana; font-size: 10pt" value="
           <?php  echo date("d/m/Y"); ?> ">
        </td>
      </tr>
    

      <tr>
        <td width="23%"><font face="Verdana" size="2">Name :-</font></td>
        <td width="43%">
            <input type="text" name="Name" size="36" value="" style="font-family: Verdana; font-size: 10pt">
        </td>
      </tr>

    
      <tr>
        <td width="23%"><font face="Verdana" size="2">Office No :-</font></td>
        <td width="43%">
            <select size="1" name="FlatNo" style="font-family: Verdana; font-size: 10pt">
                  <?php
                      $query = "SELECT * FROM `flats`";
                      $result = mysqli_query($connect,$query);
                      
                      while($row = mysqli_fetch_array($result)){
                        $office = $row['flats'];
                        echo "<option>$office<br></option>";
                      }

                  ?>
            </select>
        </td>
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
                      $query = "SELECT * FROM `banklist`";
                      $result = mysqli_query($connect,$query);

                      while($row= mysqli_fetch_array($result)){
                          $bank = $row['bankname'];
                          echo "<option>$bank</option>";
                      }
                   ?>

             </select>
  
  
             B / W <select size="1" name="contactno" style="font-family: Verdana; font-size: 10pt">
                <option value="AB" selected>B</option>
            <option value="W">W</option>
       </td>
      </tr>
      
      
      <tr>
        <td width="23%"><font face="Verdana" size="2">Cheque Date :-</font></td>
        <td width="43%">
            <input type="text" name="chequedate" size="25" style="font-family: Verdana; font-size: 10pt" 
            value=" <?php
                        echo date("d/m/Y");                 
                    ?>">

            Balance <select size="1" name="shbalance" style="font-family: Verdana; font-size: 10pt">
            <option value="Show" selected>Show</option>
            <option value="Hide">Hide</option></select>

        </td>
      </tr>
	  
	  
        <tr>
        <td width="23%"><font face="Verdana" size="2">Rebate Taken:</font></td>
        <td width="43%">
		
        <font size="2">   

        <script>
            function myFunction() {
                alert("Type A/B Rebate Max 12 Lacs Already Taken");
            }
        </script>

        <script>
            function myFunction() {
                alert("Type V Rebate Max 9.6 Lacs Already Taken");
            }
        </script>

		</td>
      </tr>
		
		
		<tr>
        <td width="23%"><font face="Verdana" size="2">Special Note :-</font></td>
        <td width="43%">
        <textarea rows="3"  style="font-family: Verdana; font-size: 10pt" name="specialnote" cols="40"></textarea>
		
		<select size="1" name="specialshow" style="font-family: Verdana; font-size: 10pt">
            <option value="Show" selected>Show</option>
            <option value="Hide">Hide</option>
        </select>
		
		</td>
      </tr>
	  
    </table>
    </center>
  </div>
  <p align="center"><font face="Verdana"><font size="2"><br>
  </font><input type="submit" value="Submit" style="font-family: Verdana; font-size: 10pt"><font size="2">
  <br>




</form>

      <?php 
          
        
          // if(isset($_POST['Submit']))
          // {
          //   $DATE = $_POST['date'];
          //   $NAME = $_POST['Name'];
          //   $FLATNO = $_POST['FlatNo'];
          //   $PAYMENT = $_POST['PaymentMode'];
          //   $AMOUNT = $_POST['Amount'];
          //   $CHQNO = $_POST['chequeno'];
          //   $DRWNON = $_POST['drawnon'];
          //   $CONTACT = $_POST['contactno'];
          //   $CHKDATE = $_POST['chequedate'];
          //   $SHBLNCE = $_POST['shbalance'];
          //   $SPNOTE = $_POST['specialnote'];
          //   $SPSHOW = $_POST['specialshow'];

          // }
      
      
      ?>

</body>

</html>