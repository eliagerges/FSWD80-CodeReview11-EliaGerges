<?php 

require_once 'db_connect.php';

if ($_POST) {
   $name = $_POST['todoName'];
   $type = $_POST['todoType'];
   $descr = $_POST[ 'todoDescription'];
   $web = $_POST[ 'todoWeb'];
   $id = $_POST['locToDo_id'];

   $sql = "INSERT INTO todo (todoName, todoType, todoDescription, todoWeb, locToDo_id) VALUES ('$name', '$type', '$descr', '$web', '$id')";
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