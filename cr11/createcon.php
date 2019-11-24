<!DOCTYPE html>
<html>
<head>
   <title>Create Concert</title>

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
   <legend>Add Concert</legend>

   <form action="actions/a_createcon.php" method= "post">
       <table cellspacing= "0" cellpadding="0">
           <tr>
               <th>Date</th >
               <td><input  type="text" name="conDate" placeholder="Date"/></td >
           </tr>     
           <tr>
               <th>Price</th>
               <td><input type="text" name= "conPrice" placeholder="Price"/></td>
           </tr>
           <tr>
               <th>Website</th>
               <td><input type="text"  name="conWeb" placeholder ="Website" /></td>
           </tr>
           <tr>
               <th>Name</th>
               <td><input type="text"  name="conName" placeholder ="Name" /></td>
           </tr>
           <tr>
               <th>ID</th>
               <td><input type="text"  name="locCon_id" placeholder ="ID" /></td>
           </tr>
           <tr>
               <td><button type ="submit">Insert Concert</button></td>
               <td><a href= "home.php"><button type="button">Back</button></a></td>
           </tr >
       </table>
   </form>

</fieldset >

</body>
</html>