<!DOCTYPE html>
<html>
<head>
   <title>Create Restaurant</title>

   <style type= "text/css">
       fieldset {
          margin: auto;
          margin-top: 100px;
          width: 50% ;
       }

       table tr th  {
           padding-top: 20px;
       }
   </style>

</head>
<body>

<fieldset>
   <legend>Add Restaurant</legend>

   <form action="actions/a_createres.php" method= "post">
       <table cellspacing= "0" cellpadding="0">
           <tr>
               <th>Name</th >
               <td><input  type="text" name="resName" placeholder="Name"/></td >
           </tr>
           <tr>
               <th>Telephone</th >
               <td><input  type="text" name="resTel" placeholder="Telephone"/></td >
           </tr>     
           <tr>
               <th>Type</th>
               <td><input type="text" name= "resType" placeholder="Type"/></td>
           </tr>
           <tr>
               <th>Description</th>
               <td><input type="text"  name="resDescription" placeholder ="Description" /></td>
           </tr>
           <tr>
               <th>Website</th>
               <td><input type="text"  name="resWeb" placeholder ="Website" /></td>
           </tr>
           <tr>
               <th>ID</th>
               <td><input type="text"  name="locRest_id" placeholder ="ID" /></td>
           </tr>
           <tr>
               <td><button type ="submit">Insert Restaurant</button></td>
               <td><a href= "home.php"><button type="button">Back</button></a></td>
           </tr >
       </table>
   </form>

</fieldset >

</body>
</html>