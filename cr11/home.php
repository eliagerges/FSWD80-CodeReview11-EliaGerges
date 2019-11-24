<?php 
require_once 'actions/db_connect.php'; 
?> 

<!DOCTYPE html>
<html>
<head>
   <title>User Page</title>
   <style type ="text/css">
       .manageUser {
           width : 100%;
           margin: auto;
       }
       img{
      height: 100px;
      width: 100px;
    }



   </style>

   <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body style="width: 100%">
	<nav class="navbar navbar-expand-lg navbar-dark bg-success">

  <a class="navbar-brand text-white">Welcome To Travel-o-matic</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-md-0">
      <li>
        <span class="navbar-brand text-white">Admin Panel</span>
      </li>
      <li>
        <a class="nav-link text-white" href="logout.php?logout">Sign out<span class="sr-only"></a>
      </li>
    </ul>
  </div>
</nav>

<div class ="manageUser container-responsive m-0 p-0">
   <h1>Concerts</h1>

   <a href= "createcon.php"><button type="button" >Add Concert</button></a>

   <table class="table table-striped table-bordered table-responsive">
       <thead>
       	<tr>
          <th>Date</th>
          <th>Price</th>
          <th>Website</th>
          <th>Name</th>
          <th>City</th>
      		<th>Zipcode</th>
      		<th>Address</th>
      		<th>Image</th>
        </tr>
         
       </thead>
       <tbody>
          
            <?php

            $sql = "SELECT * FROM concerts 
				            INNER JOIN locationcon ON concerts.locCon_id = locationcon.locCon_id";

			          $result = $conn->query($sql);
		   

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo "<tr>";
                    echo "<td>" . $row['conDate'] . "</td>";
                    echo "<td>" . $row['conPrice'] . "</td>";
                    echo "<td><a href=". $row['conWeb'] . ">".$row['conWeb']."</a></td>";
                    echo "<td>". $row['conName']. "</td>";
                    echo "<td>". $row['cityCon']. "</td>";
                    echo "<td>". $row['zipcodeCon']. "</td>";
                    echo "<td>". $row['addressCon']. "</td>";
                    echo "<td><img src=".$row['imageCon'] ."></a></td>"; 
                    echo "<td>
                           <a href='updatecon.php?id=" .$row['con_id']."'><button type='button'>Edit</button></a>
                           <a href='deletecon.php?id=" .$row['con_id']."'><button type='button'>Delete</button></a>
                       </td>";
                    echo "</tr>";

                   

               }
           } else  {
               echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
           }
            ?>

            
       </tbody>
	</table>

	<h1>Restaurants</h1>
	<a href= "createres.php"><button type="button">Add Restaurant</button></a>
    <table class="table table-striped table-bordered table-responsive">
       <thead>
       	<tr>
          <th>Name</th>
          <th>Telephone</th>
          <th>Type</th>
          <th>Description</th>
      		<th>Website</th>
      		<th>City</th>
      		<th>Zipcode</th>
      		<th>Address</th>
      		<th>Image</th>
      		
        </tr>
         
       </thead>
       <tbody>
<?php
       $sql1 = "SELECT * FROM restaurants 
				   INNER JOIN locationrest ON restaurants.locRest_id = locationrest.locRest_id";	   
            $result1 = $conn->query($sql1);
           if($result1->num_rows > 0) {
                while($row = $result1->fetch_assoc()) {

                   echo "<tr>";
                    echo "<td>" . $row['resName'] . "</td>";
                    echo "<td>" . $row['resTel'] . "</td>";
                    echo "<td>" .$row['resType']. "</td>";
                    echo "<td>". $row['resDescription']. "</td>";
                    echo "<td><a href=". $row['resWeb'] . ">".$row['resWeb']."</a></td>";
                    echo "<td>". $row['cityRest']. "</td>";
                    echo "<td>". $row['zipcodeRest']. "</td>";
                    echo "<td>". $row['addressRest']. "</td>";
                    echo "<td><img src=".$row['imageRest'] ."></a></td>";
                    echo " <td>
                           <a href='updateres.php?id=" .$row['res_id']."'><button type='button'>Edit</button></a>
                           <a href='deleteres.php?id=" .$row['res_id']."'><button type='button'>Delete</button></a>
                       </td>";
                    
                    echo "</tr>";

                  
               }
           } else  {
               echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
           }
           ?>

        </tbody>
        </table>

        <h1>Things To-Do</h1>
        <a href= "createtodo.php"><button type="button" >Add To-Do</button></a>
    <table class="table table-striped table-bordered table-responsive">
       <thead>
       	<tr>
          <th>Name</th>
          <th>Type</th>
          <th>Description</th>
      		<th>Website</th>
      		<th>City</th>
      		<th>Zipcode</th>
      		<th>Address</th>
      		<th>Image</th>
        </tr>
         
       </thead>
       <tbody>
      <?php
       $sql1 = "SELECT * FROM todo 
				   INNER JOIN locationtodo ON todo.locToDo_id = locationtodo.locToDo_id";	   
            $result1 = $conn->query($sql1);
           if($result1->num_rows > 0) {
                while($row = $result1->fetch_assoc()) {
                  echo "<tr>";
                    echo "<td>" . $row['todoName'] . "</td>";
                    echo "<td>" . $row['todoType'] . "</td>";
                    echo "<td>" .$row['todoDescription']. "</td>";
                    echo "<td><a href=". $row['todoWeb'] . ">".$row['todoWeb']."</a></td>";
                    echo "<td>". $row['cityToDo']. "</td>";
                    echo "<td>". $row['zipcodeToDo']. "</td>";
                    echo "<td>". $row['addressToDo']. "</td>";
                    echo "<td><img src=".$row['imageToDo'] ."></td>"; 
                    echo "<td>
                           <a href='updatetodo.php?id=" .$row['todo_id']."'><button type='button'>Edit</button></a>
                           <a href='deletetodo.php?id=" .$row['todo_id']."'><button type='button'>Delete</button></a>
                       </td>";
                    echo "</tr>";
               }
           } else  {
               echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
           }
           ?>

        </tbody>
        </table>    
   
   
</div>

</body>
</html>
<?php ob_end_flush(); ?>