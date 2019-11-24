<?php 

require_once 'actions/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM restaurants 
           INNER JOIN locationrest ON locationrest.locRest_id = restaurants.locRest_id
           WHERE res_id = {$id}" ;
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

   <form action="actions/a_updateres.php"  method="post">
       <table  cellspacing="0" cellpadding= "0">
           <tr>
               <th>Name</th>
               <td><input type="text" name="resName"  value="<?php echo $data['resName'] ?>"  /></td>
           </tr >     
           <tr>
               <th>Telephone</th>
               <td><input type= "text" name="resTel"  value ="<?php echo $data['resTel'] ?>" /></td >
           </tr>
           <tr>
               <th>Type</th>
               <td><input type ="text" name= "resType"  value= "<?php echo $data['resType'] ?>" /></td>
           </tr> 
           <tr>
               <th>Description</th>
               <td><input type ="text" name= "resDescription"  value= "<?php echo $data['resDescription'] ?>"/></td>
           </tr>
           <tr>
               <th>Website</th>
               <td><input type ="text" name= "resWeb"  value= "<?php echo $data['resWeb'] ?>"/></td>
           </tr>
           <tr>
               <th>City</th>
               <td><input type ="text" name= "cityREst"  value= "<?php echo $data['cityREst'] ?>"/></td>
           </tr>
           <tr>
               <th>Zipcode</th>
               <td><input type ="text" name= "zipcodeRest"  value= "<?php echo $data['zipcodeRest'] ?>"/></td>
           </tr>
           <tr>
               <th>Address</th>
               <td><input type ="text" name= "addressRest"  value= "<?php echo $data['addressRest'] ?>"/></td>
           </tr>
           <tr>
               <th>Image</th>
               <td><input type ="text" name= "imageRest"  value= "<?php echo $data['imageRest'] ?>"/></td>
           </tr>
           <tr>
               <input type= "hidden" name= "id" value= "<?php echo $data['res_id']?>"/>
               <td><button  type= "submit">Save Changes</button></td>
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
