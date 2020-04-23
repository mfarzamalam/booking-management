<?php
   include('common.php');
 
?>

<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Completion - <?php echo $_SESSION["project"]?></title>
<style>

body   { font-family: Arial; font-size: 12pt }

</style>
</head>

<body>

<b><font size="2" face="Verdana" color="#800000"><center><?php echo $_SESSION["project"]?></center></font></b>

    

<br>
    <hr color="#000000" size="1">
	
	<?php echo isset($_GET['msg'])?>
	

&nbsp;<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="100%" id="AutoNumber3" bgcolor="#000000">
<tr>
  <td width="90%" align="center"><font color="#FFFFFF"><b>Completion Date</b></font></td>
		<td width="10%" align="center"><b><font color="#FFFFFF">UPDATE</font></b></td>
</tr>
    </table>
    <table border="1" cellpadding="0" cellspacing="3" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber4">

<?php
$query = "SELECT `completiondate`,`id` from `info` where `user` = '$_SESSION[user]' ORDER by id ASC";
$result = mysqli_query($connect,$query);

while($ps = mysqli_fetch_assoc($result)) { 
?>
  <form method="POST" action="update_completion.php" target="_blank">
<tr>
<td width="90%"><input type="text" name="completiondate" size="20" value="<?php echo $ps['completiondate'];?>"></td>
<td width="10%"><input type="submit" value="Update" name="B1"> </td>
</tr>
	    <input type="hidden" name="id" value="<?php echo $ps['id'];?>">
		
	  </form>

<?php } ?>
    
</table>

  
    </td>
  </tr>
</table>

</body>

</html>