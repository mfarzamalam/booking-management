
<?php
   include('common.php');
 
?>
<html>
<head>
<title> <?php echo $_SESSION["user"] ?></title>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<?php
 
if (isset($_GET["search"])){ 
$strSearch = $_GET['search'];

 
if (isset($_GET['page_no']) && $_GET['page_no']!="") {
	$page_no = $_GET['page_no'];
	} else {
		$page_no = 1;
        }
 


        $total_records_per_page = 10;
        $offset = ($page_no-1) * $total_records_per_page;
      $previous_page = $page_no - 1;
      $next_page = $page_no + 1;
      $adjacents = "2"; 
    
      $result_count = mysqli_query($connect,"SELECT count(*) As total_records FROM `receipts` where `chequeno` like '%$strSearch%' OR `name` like '%$strSearch%' AND what = '$_SESSION[user]' "  );
       $total_records = mysqli_fetch_array($result_count);
 
      $total_records = $total_records['total_records'];
        $total_no_of_pages = ceil($total_records / $total_records_per_page);
      $second_last = $total_no_of_pages - 1; // total page minus 1
       
 
} 
else {
$strSearch ="";
}


?>



<b><font size="2" face="Verdana" color="#800000"><center><?php echo $_SESSION["project"]?></center></font></b>

    

<p align="right"><font size="1" face="Verdana">Date : <?php echo Date("d/m/Y");?>
 </font>
</p>
<p align="center"><b><font size="5" face="Verdana">Search Receipts (s) <?php echo $_SESSION["project"]; ?></font></b></p>
<br>



<center>
<form action="db_search.php" method="get">
<input name="search" value="<?php  echo $strSearch?>" size="20" />
<input type="submit" />
</form> </center>
<?php
    if (isset($_GET["search"])) {
	
$SQL2 = "SELECT * FROM `receipts` where `chequeno` like '%$strSearch%' OR `name` like '%$strSearch%' AND what = '$_SESSION[user]' order by ID ASc LIMIT $offset, $total_records_per_page";
$result = mysqli_query($connect,$SQL2);

?>
	
	
		  <div align="center">
    <center>
    <table border="0" cellpadding="2" cellspacing="0" style="border-collapse: collapse" width="100%" id="AutoNumber2" bordercolorlight="#000000" bgcolor="#000000">
      <tr>
        <td width="8%" align="center"><b><font face="Verdana" size="1" color="#FFFFFF">Date</font></b></td>
        <td width="18%" align="center"><font face="Verdana" size="1" color="#FFFFFF"><b>Name</b></font></td>
        <td width="8%" align="center"><b><font face="Verdana" size="1" color="#FFFFFF">Amount</font></b></td>
        <td width="22%" align="center"><font face="Verdana" size="1" color="#FFFFFF"><b>Bank</b></font></td>
        <td width="10%" align="center"><font face="Verdana" size="1" color="#FFFFFF"><b>Chq 
        No.</b></font></td>
        <td width="10%" align="center"><font face="Verdana" size="1" color="#FFFFFF"><b>Chq 
        Date</b></font></td>
          <td width="13%" align="center"><b><font face="Verdana" size="1" color="#FFFFFF">Unit No</font></b></td>
        <td width="28%" align="center"><b><font face="Verdana" size="1" color="#FFFFFF">Payment Mode</font></b></td>
      </tr>
    </table>
    </center>
  </div>
	
	
	
<?php while($rs = mysqli_fetch_assoc($result)) {?>
		
		
		
		<tr>
		<td></td>
		<td></td>
		</tr>
		


  <div align="center">
    <center>
    <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber2">
      <tr>
        <td width="8%" align="center"><font face="Verdana" size="1"><?php echo $rs['date'];?></font>&nbsp;</td>
        <td width="18%" align="center"><font face="Verdana" size="1"><?php echo $rs['Name'];?></font>&nbsp;</td>
        <td width="8%" align="center"><font face="Verdana" size="1"><?php echo $rs['Amount'];?></font>&nbsp;</td>
        <td width="22%" align="center"><font face="Verdana" size="1"><?php echo $rs['drawnon'];?></font>&nbsp;</td>
        <td width="10%" align="center"><font face="Verdana" size="1"><?php echo $rs['chequeno'];?></font>&nbsp;</td>
        <td width="10%" align="center"><font face="Verdana"size="1"><?php echo $rs['chequedate'];?></font>&nbsp;</td>
        <td width="13%" align="center"><font face="Verdana"size="1"><?php echo $rs['FlatNo'];?></font>&nbsp;</td>
        <td width="28%" align="center"><font face="Verdana" size="1"><?php echo $rs['PaymentMode'];?></font>
       
        </td>
      </tr>
    </table>
    </center>
  </div>
	
    <?php } ?>
</table>



<div class="d-flex justify-content-center" style='padding: 10px 20px 0px; border-top: dotted 1px #CCC;' >
<strong>Page <?php echo $page_no." of ".$total_no_of_pages; ?></strong>
</div>

<ul class=" pagination">
	<?php // if($page_no > 1){ echo "<li><a href='?page_no=1'>First Page</a></li>"; } ?>
    
	<li <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
	<a <?php if($page_no > 1){ echo "href='?search=$strSearch&page_no=$previous_page'"; } ?>>Previous</a>
	</li>
       
    <?php 
	if ($total_no_of_pages <= 10){  	 
		for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
			if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?search=$strSearch&page_no=$counter'>$counter</a></li>";
				}
        }
	}
	elseif($total_no_of_pages > 10){
		
	if($page_no <= 4) {			
	 for ($counter = 1; $counter < 8; $counter++){		 
			if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?search=$strSearch&page_no=$counter'>$counter</a></li>";
				}
        }
		echo "<li><a>...</a></li>";
		echo "<li><a href='?search=$strSearch&page_no=$second_last'>$second_last</a></li>";
		echo "<li><a href='?search=$strSearch&page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
		}

	 elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {		 
		echo "<li><a href='?search=$strSearch &page_no=1'>1</a></li>";
		echo "<li><a href='?search=$strSearch &page_no=2'>2</a></li>";
        echo "<li><a>...</a></li>";
        for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {			
           if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?search=$strSearch& page_no=$counter'>$counter</a></li>";
				}                  
       }
       echo "<li><a>...</a></li>";
	   echo "<li><a href='?search=$strSearch& page_no=$second_last'>$second_last</a></li>";
	   echo "<li><a href='?search=$strSearch& page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";      
            }
		
		else {
        echo "<li><a href='? search=$strSearch& page_no=1'>1</a></li>";
		echo "<li><a href='?search =$strSearch& page_no=2'>2</a></li>";
        echo "<li><a>...</a></li>";

        for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
          if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='? search=$strSearch&page_no=$counter'>$counter</a></li>";
				}                   
                }
            }
	}
?>
    
	<li <?php if($page_no >= $total_no_of_pages){ echo "class='disabled'"; } ?>>
	<a <?php if($page_no < $total_no_of_pages) { echo "href='?search=$strSearch&page_no=$next_page'"; } ?>>Next</a>
	</li>
    <?php if($page_no < $total_no_of_pages){
		echo "<li><a href='?search=$strSearch&page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
		} ?>
</ul>


<?php } ?>