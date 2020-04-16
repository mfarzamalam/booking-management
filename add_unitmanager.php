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
        $WHAT = $_SESSION['user'];

        $query = "INSERT INTO flats (name,sold,monthlym,flats,broker,What) values ('$NAME','$SOLD','$MAINTAIN','$FLATS','$COMMENT','$WHAT')";
        $insert_data = mysqli_query($connect,$query);  
        header('location:unitmanager.php');
  
    }

  ?>


 