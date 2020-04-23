<?php
   include('common.php');
 
?>


<?php

$query = "UPDATE `contactlist` SET  `statusss`=('send') WHERE `statusss` = ('sent')"; 

$result = mysqli_query($connect,$query);

?>


SYSTEM READY FOR NEW SMS SHOTS