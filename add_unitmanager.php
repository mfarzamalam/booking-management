<?php

    include('common.php');
?>

<?php

        
      if(isset($_POST['B1'])){

        $NAME = $_POST['name'];
        $SOLD = $_POST['sold'];
        $FLATS = $_POST['flats'];
        $MAINTAIN = $_POST['monthlym'];
        $COMMENT = $_POST['comment'];

        $query = "INSERT INTO flats (name,sold,monthlym,flats,broker,what) values ('$NAME','$SOLD','$MAINTAIN','$FLATS','$COMMENT','')";
        $insert_data = mysqli_query($connect,$query);  
    }

  ?>


<head>

<script language="javascript">

setTimeout("self.close();",500)

</script> 
</head>