<?php 

require_once 'db_connect.php';

if ($_POST) {
   $name = $_POST['resName'];
   $tel = $_POST['resTel'];
   $type = $_POST[ 'resType'];
   $descr = $_POST[ 'resDescription'];
   $web = $_POST[ 'resWeb'];


   $id = $_POST['id'];

   $sql = "UPDATE restaurants SET resName = '$name', resTel = '$tel', resType = '$type', resDescription = '$descr', resWeb = '$web' WHERE res_id = {$id}" ;
   if($conn->query($sql) === TRUE) {
       echo  "<p>Successfully Updated</p>";
       echo "<a href='../updateres.php?id=" .$id."'><button type='button'>Back</button></a>";
       echo  "<a href='../home.php'><button type='button'>Home</button></a>";
   } else {
        echo "Error while updating record : ". $conn->error;
   }

   $conn->close();

}

?>