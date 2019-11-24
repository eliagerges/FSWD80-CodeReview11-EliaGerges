<?php 

require_once 'db_connect.php';

if ($_POST) {
   $name = $_POST['todoName'];
   $type = $_POST['todoType'];
   $descr = $_POST[ 'todoDescription'];
   $web = $_POST[ 'todoWeb'];
   $city = $_POST[ 'cityToDo'];
   $zip = $_POST[ 'zipcodeToDo'];
   $add = $_POST[ 'addressToDo'];
   $img = $_POST[ 'imageToDo'];

   $id = $_POST['id'];

   $sql = "UPDATE todo, locationtodo SET todoName = '$name', todoType = '$type', todoDescription = '$descr', todoWeb = '$web', cityToDo = '$city', zipcodeToDo = '$zip', addressToDo = '$add', imageToDo = '$img' WHERE todo_id = {$id}" ;

   if($conn->query($sql) === TRUE) {
       echo  "<p>Successfully Updated</p>";
       echo "<a href='../updatetodo.php?id=" .$id."'><button type='button'>Back</button></a>";
       echo  "<a href='../home.php'><button type='button'>Home</button></a>";
   } else {
        echo "Error while updating record : ". $conn->error;
   }

   $conn->close();

}

?>