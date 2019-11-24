<!DOCTYPE html>
<html>
<head>
   <title>Create To-Do</title>

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
   <legend>Add To-Do</legend>

   <form action="actions/a_createtodo.php" method= "post">
       <table cellspacing= "0" cellpadding="0">
           <tr>
               <th>Name</th >
               <td><input  type="text" name="todoName" placeholder="Name"/></td >
           </tr>     
           <tr>
               <th>Type</th>
               <td><input type="text" name= "todoType" placeholder="Type"/></td>
           </tr>
           <tr>
               <th>Description</th>
               <td><input type="text"  name="todoDescription" placeholder ="Description" /></td>
           </tr>
           <tr>
               <th>Website</th>
               <td><input type="text"  name="todoWeb" placeholder ="Website" /></td>
           </tr>
           <tr>
               <th>ID</th>
               <td><input type="text"  name="locToDo_id" placeholder ="ID" /></td>
           </tr>
           <tr>
               <td><button type ="submit">Insert To-Do</button></td>
               <td><a href= "home.php"><button type="button">Back</button></a></td>
           </tr >
       </table>
   </form>

</fieldset >

</body>
</html>