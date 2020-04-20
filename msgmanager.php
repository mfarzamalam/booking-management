<?php 
  include('common.php');
?>

<?php 
  
  if ($_SESSION['user'] == "") {
        header('location:default.php');
    }

?>

<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Message Manager - <?php echo $_SESSION['project']?></title>
<style>
body   { font-family: Arial; font-size: 12pt }
</style>
</head>

<body>

<b><font size="2" face="Verdana" color="#800000"><center><?php echo $_SESSION['project']?></center></font></b>

    

<br>
    <hr color="#000000" size="1">
	
	Position 8 is Bottom
	

<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="100%" id="AutoNumber3" bgcolor="#000000">
<tr>
  <td width="20%" align="center"><font color="#FFFFFF"><b>Subject</b></font></td>
 <td width="50%" align="center"><font color="#FFFFFF"><b>Message</b></font></td>
 <td width="10%" align="center"><font color="#FFFFFF"><b>Position</b></font></td>
		<td width="20%" align="center"><b><font color="#FFFFFF">UPDATE</font></b></td>
</tr>
    </table>
    <table border="1" cellpadding="0" cellspacing="3" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber4">

<form method="POST" action="add_msgmanager.php" target="_blank">
<tr>
<td width="20%"><input type="text" name="subject" size="20" value=""></td>
<td width="50%">

 <textarea rows="4" name="message" cols="50">

</textarea> 

</td>
<td width="10%"><input type="text" name="position" size="10" value=""></td>
<td width="20%"><input type="submit" value="Add NEW" name="B1"> </td>
</tr>
</form>

<?php

$query = "SELECT * from `msg` where `what` = '$_SESSION[user]' ORDER by `id` ASC";
$reslt = mysqli_query($connect,$query);

while ($ps = mysqli_fetch_array($reslt)) { 
?>
  <form method="POST" action="update_msgmanager.php" target="_blank">
<tr>
<td width="20%"><input type="text" name="subject" size="20" value="<?php echo $ps['subject'];?>"></td>
<td width="50%">

 <textarea rows="4" name="message" cols="50">
 <?php echo $ps['message'];?>
</textarea> 


</td>
<td width="10%"><input type="text" name="position" size="10" value="<?php echo $ps['position'];?>"></td>
<td width="20%"><input type="submit" value="Update" name="B1"> </td>
</tr>
	    <input type="hidden" name="id" value="<?php echo $ps['id'];?>">
		
	  </form>

	  
<?php } 

$ps = "Nothing";
?>
    </table>

  

</body>

</html>