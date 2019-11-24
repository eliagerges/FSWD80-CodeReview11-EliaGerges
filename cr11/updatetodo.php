<?php 

require_once 'actions/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

  $sql = "SELECT * FROM todo
          INNER JOIN locationtodo ON locationtodo.locToDo_id = todo.locToDo_id 
          WHERE todo_id = {$id}";

   $result = $conn->query($sql);

   $data = $result->fetch_assoc();


   $conn->close();

?>

<!DOCTYPE html>
<html>
<head>
   <title>Edit</title>

   <style type= "text/css">
       fieldset {
           margin : auto;
           margin-top: 100px;
            width: 50%;
       }

       table tr th {
           padding-top: 20px;
       }
   </style>

</head>
<body>

<fieldset>
   <legend>Update</legend>

   <form action="actions/a_updatetodo.php"  method="post">
       <table>
           <tr>
               <th>Name</th>
               <td><input type="text" name="todoName"  value="<?php echo $data['todoName'] ?>"  /></td>
           </tr>     
           <tr>
               <th>Type</th>
               <td><input type= "text" name="todoType"  value ="<?php echo $data['todoType'] ?>" /></td >
           </tr>
           <tr>
               <th>Description</th>
               <td><input type ="text" name= "todoDescription"  value= "<?php echo $data['todoDescription'] ?>" /></td>
           </tr> 
           <tr>
               <th>Website</th>
               <td><input type ="text" name= "todoWeb"  value= "<?php echo $data['todoWeb'] ?>"/></td>
           </tr>
           <tr>
               <th>City</th>
               <td><input type ="text" name= "cityToDo"  value= "<?php echo $data['cityToDo'] ?>"/></td>
           </tr>
           <tr>
               <th>Zipcode</th>
               <td><input type ="text" name= "zipcodeToDo"  value= "<?php echo $data['zipcodeToDo'] ?>"/></td>
           </tr>
           <tr>
               <th>Address</th>
               <td><input type ="text" name= "addressToDo"  value= "<?php echo $data['addressToDo'] ?>"/></td>
           </tr>
           <tr>
               <th>Image</th>
               <td><input type ="text" name= "imageToDo"  value= "<?php echo $data['imageToDo'] ?>"/></td>
           </tr>
           <tr>
               <input type= "hidden" name= "id" value= "<?php echo $data['todo_id']?>"/>
               <td><button type= "submit">Save Changes</button></td>
               <td><a href= "home.php"><button type="button">Back</button ></a></td>
           </tr>
       </table>
   </form >

</fieldset >

</body >
</html >

<?php 
}
?>

