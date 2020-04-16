<?php

  include('common.php');
?>

<?php

    $UNAME = $_POST['name1'];
    $USOLD = $_POST['sold1'];
    $UFLATS = $_POST['flats1'];
    $UMAINTAIN = $_POST['monthlym1'];
    $UCOMMENT = $_POST['comment1'];
    $UID = $_POST['id'];
    
    // echo $UNAME.$USOLD.$UFLATS.$UMAINTAIN.$UID;

    $query1 = "UPDATE `flats` SET `name`=$UNAME, `sold`=$USOLD, `flats`=$UFLATS, `Broker`=$UCOMMENT, `monthlym`=$UMAINTAIN, WHERE `id`='$UID' ";

    $update_data = mysqli_query($connect,$query1);
    header('location:unitmanager.php');
  
?>
