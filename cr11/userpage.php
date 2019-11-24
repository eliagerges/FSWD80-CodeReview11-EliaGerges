<?php require_once 'actions/db_connect.php'; ?> 

<!DOCTYPE html>
<html>
<head>
   <title>User Page</title>

   <style type="text/css">
       .manageUser {
           width : 100%;   
       }

        table {
           width: 90%;    
       }
       #search-box1, #search-box2, #search-box3{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    #search-box1, #search-box2, #search-box3 input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    #result1, #result2, #result3{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
    #search-box1, #search-box2, #search-box3 input[type="text"], #result1, #result2, #result3{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    #result1, #result2, #result3 p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    img{
      height: 100px;
      width: 100px;
    }

   </style>
   <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#search-box1 input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings("#result1");
        if(inputVal.length){
            $.get("backend-searchcon.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
});

$(document).ready(function(){
    $('#search-box2 input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings("#result2");
        if(inputVal.length){
            $.get("backend-searchres.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
});

$(document).ready(function(){
    $('#search-box3 input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings("#result3");
        if(inputVal.length){
            $.get("backend-searchtodo.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
});
</script>
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
        <a class="nav-link text-white" href="event.php">Events</a>
      </li>
      <li>
        <a class="nav-link text-white" href="logout.php?logout">Sign out<span class="sr-only"></a>
      </li>
    </ul>
  </div>
</nav>

<div class ="manageUser">
   <h1>Concerts</h1>
   <div id="search-box1">
        <input type="text" autocomplete="off" placeholder="Search" />
        <div class="mb-5" id="result1"></div>
    </div>
   <table class="table table-striped table-bordered table-responsive mt-5">
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

  <h1>Restaurants</h1>
  <div  id="search-box2">
        <input type="text" autocomplete="off" placeholder="Search" />
        <div class="mb-5" id="result2"></div>
    </div>
    <table class="table table-striped table-bordered table-responsive mt-5">
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

        </tbody>
        </table>

        <h1>Things To-Do</h1>
        <div  id="search-box3">
        <input type="text" autocomplete="off" placeholder="Search" />
        <div class="mb-5" id="result3"></div>
    </div>
    <table class="table table-striped table-bordered table-responsive mt-5">
       <thead>
        <tr>
          <th>Name</th>
          <th>Type</th>
          <th>Description</th>a
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
   
   
</div>

</body>
</html>
<?php ob_end_flush(); ?>