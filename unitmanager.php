<?php

    include('common.php');
?>

<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Unit Manager </title>
<style>

body   { font-family: Arial; font-size: 12pt }

</style>
</head>

<body>


<b><font size="2" face="Verdana" color="#800000"><center></center></font></b>

    

<br>
    <hr color="#000000" size="1">
	
	
	<br>
	<h5> SEARCH <h5>
	
	<form method="GET" action="unitmanager.php" id="form">
  SEARCH BY UNIT NO, NAME<br>
  <input type="text" name="q" size="28" id="q">
  <input type="submit" value="Search"></p>

  <?php

    $what =  $_SESSION['user'];
    $query = "SELECT * FROM `flats` where What = '$what'"  ;
    if(isset($_GET["q"])){
    $search = $_GET['q'];
    $query = "SELECT * from flats where  What = '$what' and ( `name` like '%$search%' or flats  like '%$search%' ) ORDER by id DESC limit 0,30;";
  }
    
    
    $result = mysqli_query($connect,$query);
    echo mysqli_error($connect);
  ?>
  </div>
  </form>

	
    <br>
    <br>
&nbsp;<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="100%" id="AutoNumber3" bgcolor="#000000">
<tr>
  <td width="30%" align="center"><font color="#FFFFFF"><b>Name</b></font></td>
 <td width="10%" align="center"><font color="#FFFFFF"><b>Sold</b></font></td>
	   <td width="20%" align="center"><font color="#FFFFFF"><b>Flat</b></font></td>
	   <td width="20%" align="center"><font color="#FFFFFF"><b>Comment</b></font></td>
		<td width="20%" align="center"><b><font color="#FFFFFF">UPDATE</font></b></td>
</tr>
    </table>

     
    <table border="1" cellpadding="3" cellspacing="3" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber4">



    <form method="POST" action="add_unitmanager.php"  >
<tr>
<td width="20%"><input type="text" name="name" size="50" value=""></td>
<td width="20%"><input type="text" name="sold" size="15" value=""></td>
<td width="20%"><input type="text" name="flats" size="5" value=""><br>
 Maintainance: <input type="text" name="monthlym" size="5" value=""></td>
<td width="20%"><input type="text" name="comment" size="20" value=""></td>
<td width="20%"><input type="submit" value="Add NEW" name="B1"> </td>


</tr>
</form>

 

<?php
    while($row = mysqli_fetch_array($result)){

?>
  
  <form method="POST" action="update_unitmanager.php" >
<tr>
<td width="10%"><input type="text" name="name1" size="50" value="<?php echo "$row[name]"; ?>">
</td>
<td width="20%"><input type="text" name="sold1" size="15" value="<?php echo "$row[sold]"; ?>"></td>
<td width="20%"><input type="text" name="flats1" size="5" value="<?php echo "$row[flats]"; ?>"><br> Maintainance:
<input type="text" name="monthlym1" size="5" value="<?php echo "$row[monthlym]"; ?>"></td>
<td width="20%"><input type="text" name="comment1" size="20" value="<?php echo "$row[Broker]"; ?>">

</td>
<td width="20%"><input type="submit" value="Update" name="B11"> </td>
</tr>
	    <input type="hidden" name="id" value="<?php echo "$row[id]"; ?>">
		
	  </form>

    <?php  }?>
	  
    </table>

  
    </td>
  </tr>
</table>

   

</body>
</html>
