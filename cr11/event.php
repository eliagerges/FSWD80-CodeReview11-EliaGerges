<?php require_once 'actions/db_connect.php'; ?> 
<!DOCTYPE html>
<html>
<head>
	<title>Events</title>
  <style type="text/css">
    img{
      height: 100px;
      width: 100px;
    }
  </style>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-success">

  <a class="navbar-brand text-white">Welcome To Travel-o-matic</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-md-0">
    	<li>
        <a class="nav-link text-white" href="restaurants.php">Restaurants</a>
      </li>
    	<li>
        <a class="nav-link text-white" href="userpage.php">See all</a>
      </li>
      <li>
        <a class="nav-link text-white" href="logout.php?logout">Sign out<span class="sr-only"></a>
      </li>
    </ul>
  </div>
</nav>

<div class ="manageUser">
   <h1>Concerts</h1>
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
                    echo "</tr>";

               }
           } else  {
               echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
           }
            ?>

            
       </tbody>
	</table>

	<h1>Things To-Do</h1>
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
                    echo "<td><img src=".$row['imageToDo'] ."></a></td>"; 
                    echo "</tr>";
               }
           } else  {
               echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
           }
           ?>

        </tbody>
        </table>  
</body>
</html>
<?php ob_end_flush(); ?>