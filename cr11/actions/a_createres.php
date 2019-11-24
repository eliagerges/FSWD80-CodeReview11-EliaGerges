<?php 

require_once 'db_connect.php';

if ($_POST) {
   $name = $_POST['resName'];
   $tel = $_POST['resTel'];
   $type = $_POST['resType'];
   $descr = $_POST[ 'resDescription'];
   $web = $_POST[ 'resWeb'];
   $id = $_POST['locRest_id'];

   $sql = "INSERT INTO restaurants (resName, resTel, resType, resDescription, resWeb, locRest_id) VALUES ('$name', '$tel', '$type', '$descr', '$web', '$id')";
    if($conn->query($sql) === TRUE) {
       echo "<p>New Record Successfully Created</p>" ;
       echo "<a href='../createres.php'><button type='button'>Back</button></a>";
        echo "<a href='../home.php'><button type='button'>Home</button></a>";
   } else  {
       echo "Error " . $sql . ' ' . $conn->connect_error;
   }

   $conn->close();
}

?>