<?php 

require_once 'actions/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM concerts 
           INNER JOIN locationcon ON locationcon.locCon_id = concerts.locCon_id
   WHERE con_id = {$id}" ;
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

       table  tr th {
           padding-top: 20px;
       }
   </style>

</head>
<body>

<fieldset>
   <legend>Update</legend>

   <form action="actions/a_updatecon.php"  method="post">
       <table  cellspacing="0" cellpadding= "0">
           <tr>
               <th>Date</th>
               <td><input type="text" name="conDate"  value="<?php echo $data['conDate'] ?>"  /></td>
           </tr >     
           <tr>
               <th>Price</th>
               <td><input type= "text" name="conPrice"  value ="<?php echo $data['conPrice'] ?>" /></td >
           </tr>
           <tr>
               <th>Website</th>
               <td><input type ="text" name= "conWeb"  value= "<?php echo $data['conWeb'] ?>" /></td>
           </tr> 
           <tr>
               <th>Name</th>
               <td><input type ="text" name= "conName"  value= "<?php echo $data['conName'] ?>"/></td>
           </tr>
           <tr>
               <th>City</th>
               <td><input type ="text" name= "cityCon"  value= "<?php echo $data['cityCon'] ?>"/></td>
           </tr>
           <tr>
               <th>Zipcode</th>
               <td><input type ="text" name= "zipcodeCon"  value= "<?php echo $data['zipcodeCon'] ?>"/></td>
           </tr>
           <tr>
               <th>Address</th>
               <td><input type ="text" name= "addressCon"  value= "<?php echo $data['addressCon'] ?>"/></td>
           </tr>
           <tr>
               <th>Image</th>
               <td><input type ="text" name= "imageCon"  value= "<?php echo $data['imageCon'] ?>"/></td>
           </tr>
           <tr>
               <input type= "hidden" name= "id" value= "<?php echo $data['con_id']?>"/>
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
