<?php 

require_once 'db_connect.php';

if ($_POST) {
   $date = $_POST['conDate'];
   $price = $_POST['conPrice'];
   $web = $_POST[ 'conWeb'];
   $name = $_POST[ 'conName'];


   $id = $_POST['id'];

   $sql = "UPDATE concerts SET conDate = '$date', conPrice = '$price', conWeb = '$web', conName = '$name' WHERE con_id = {$id}" ;
   if($conn->query($sql) === TRUE) {
       echo  "<p>Successfully Updated</p>";
       echo "<a href='../updatecon.php?id=" .$id."'><button type='button'>Back</button></a>";
       echo  "<a href='../home.php'><button type='button'>Home</button></a>";
   } else {
        echo "Error while updating record : ". $conn->error;
   }

   $conn->close();

}

?>