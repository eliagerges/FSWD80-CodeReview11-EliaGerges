<?php 

require_once 'db_connect.php';

if ($_POST) {
   $date = $_POST['conDate'];
   $price = $_POST['conPrice'];
   $web = $_POST[ 'conWeb'];
   $name = $_POST[ 'conName'];
   $id = $_POST['locCon_id'];

   $sql = "INSERT INTO concerts (conDate, conPrice, conWeb, conName, locCon_id) VALUES ('$date', '$price', '$web', '$name', '$id')";
    if($conn->query($sql) === TRUE) {
       echo "<p>New Record Successfully Created</p>" ;
       echo "<a href='../createtodo.php'><button type='button'>Back</button></a>";
        echo "<a href='../home.php'><button type='button'>Home</button></a>";
   } else  {
       echo "Error " . $sql . ' ' . $conn->connect_error;
   }

   $conn->close();
}

?>