<?php require_once 'actions/db_connect.php'; ?> 
<!DOCTYPE html>
<html>
<head>
	<title>Restaurants</title>
  <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
  <style type="text/css">
    #map1 {
        height: 300px;
        width: 300px;
      }
      #map2 {
        height: 300px;
        width: 300px;
      }
      #map3 {
        height: 300px;
        width: 300px;
      }
      #map4 {
        height: 300px;
        width: 300px;
      }
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
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
        <a class="nav-link text-white" href="event.php">Events</a>
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
<span class="d-flex">
<h4>Neni</h4>
<div class="d-inline-flex" id=map1></div>
<h4>Lemon Leaf</h4>
<div class="d-inline-flex" id=map2></div>
<h4>Sixta</h4>
<div class="d-inline-flex" id=map3></div>
<h4>Hiro</h4>
<div class="d-inline-flex" id=map4></div>
</span>


<h1>Restaurants</h1>
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
                    echo "</tr>";
                   
               }
           } else  {
               echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
           }
           ?>

      <script>
      var map1;
      var map2;
      var map3;
      var map4;
      function initMap() {
      var myLatLng1 = {lat: 48.197899, lng: 16.362127};
      var myLatLng2 = {lat: 48.1959622, lng: 16.3597262};
      var myLatLng3 = {lat: 48.194022, lng: 16.3594886};
      var myLatLng4 = {lat: 48.2655433, lng: 16.4558379};

  var map1 = new google.maps.Map(document.getElementById('map1'), {
    zoom: 18,
    center: myLatLng1
  });
  var map2 = new google.maps.Map(document.getElementById('map2'), {
    zoom: 18,
    center: myLatLng2
  });
  var map3 = new google.maps.Map(document.getElementById('map3'), {
    zoom: 18,
    center: myLatLng3
  });
  var map4 = new google.maps.Map(document.getElementById('map4'), {
    zoom: 18,
    center: myLatLng4
  });

  var marker1 = new google.maps.Marker({
    position: myLatLng1,
    map: map1,
    title: 'Hello World!'
  });
  var marker2 = new google.maps.Marker({
    position: myLatLng2,
    map: map2,
    title: 'Hello World!'
  });
  var marker3 = new google.maps.Marker({
    position: myLatLng3,
    map: map3,
    title: 'Hello World!'
  });
  var marker4 = new google.maps.Marker({
    position: myLatLng4,
    map: map4,
    title: 'Hello World!'
  });
}
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtjaD-saUZQ47PbxigOg25cvuO6_SuX3M&callback=initMap"
   async defer></script>
   
</body>
</html>
<?php ob_end_flush(); ?>