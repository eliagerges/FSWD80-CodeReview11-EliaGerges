<?php
ob_start();
session_start();
require_once 'actions/db_connect.php';


if ( isset($_SESSION['users'])!="" ) {
 header("Location: home.php");
 exit;
}

$error = false;

if( isset($_POST['btn-login']) ) {


 $email = trim($_POST['email']);
 $email = strip_tags($email);
 $email = htmlspecialchars($email);

 $pass = trim($_POST['pass']);
 $pass = strip_tags($pass);
 $pass = htmlspecialchars($pass);

 if(empty($email)){
  $error = true;
  $emailError = "Please enter your email address.";
 } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
  $error = true;
  $emailError = "Please enter valid email address.";
 }

 if (empty($pass)){
  $error = true;
  $passError = "Please enter your password." ;
 }

 if (!$error) {
  
  $password = hash('sha256', $pass); 

  $res=mysqli_query($conn, "SELECT user_id, userName, userPass, status FROM users WHERE userEmail='$email'" );
  $row=mysqli_fetch_array($res, MYSQLI_ASSOC);
  $count = mysqli_num_rows($res); 
  
  if( $count == 1 && $row['userPass'] == $password ) {
    
    if($row['status'] == 'admin'){
      $_SESSION['admin'] = $row['user_id'];
      header ('Location: home.php');
    }else{
      $_SESSION['user'] = $row['user_id'];
      header ('Location: userpage.php');
    }
   
  } 
  
 }

}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login & Registration System</title>


<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-dark bg-success">
   
  <span class="navbar-brand">Welcome To Travel-o-matic</span>
  <a class="navbar-brand" href="register.php">Sign Up Here...</a>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-md-0">
      <li class="nav-item active">
        <a class="nav-link" href="#!">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#!">Link</a>
      </li>
    </ul>
  </div>
</nav>
   <form method="post"  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete= "off">
  
    
            <h2>Sign In.</h2>
            <hr/>
            
            <?php
  if (isset($errMSG)) {
      echo  $errMSG; ?>
              
               <?php
  }
  ?>
           
          
            
            <input type="email" name="email"  class="form-control" placeholder= "Your Email"  maxlength="40" />
        
            <span class="text-danger"> <?php echo $emailError; ?> </span >
  
          
            <input  type="password" name="pass"  class="form-control" placeholder ="Your Password" maxlength="15"  />
        
           <span  class="text-danger"> <?php echo $passError; ?> </span>

            <hr/>

            <button  type="submit" name= "btn-login">Sign In</button>
          
          
            <hr/>
  

      
          
   </form>
   </div>
</div>
</body>
</html>
<?php ob_end_flush(); ?>