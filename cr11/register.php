<?php
ob_start();
session_start();
if( isset($_SESSION['users'])!="" ){
 header("Location: home.php" ); 
}
include_once 'actions/db_connect.php';
$error = false;
if ( isset($_POST['btn-signup']) ) {
 
 
 $name = trim($_POST['name']);

  $name = strip_tags($name);

  $name = htmlspecialchars($name);

 $email = trim($_POST[ 'email']);
 $email = strip_tags($email);
 $email = htmlspecialchars($email);

 $pass = trim($_POST['pass']);
 $pass = strip_tags($pass);
 $pass = htmlspecialchars($pass);

 if (empty($name)) {
  $error = true ;
  $nameError = "Please enter your full name.";
 } else if (strlen($name) < 3) {
  $error = true;
  $nameError = "Name must have at least 3 characters.";
 } else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
  $error = true ;
  $nameError = "Name must contain alphabets and space.";
 }

  if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
  $error = true;
  $emailError = "Please enter valid email address." ;
 }
 else 
 {

  $query = "SELECT userEmail FROM users WHERE userEmail='$email'";
  $result = mysqli_query($conn, $query);
  $count = mysqli_num_rows($result);
  if($count!=0){
   $error = true;
   $emailError = "Provided Email is already in use.";
  }
 }
 
  if (empty($pass)){
  $error = true;
  $passError = "Please enter password.";
 }
  else if
    (strlen($pass) < 6) 
  {
  $error = true;
  $passError = "Password must have atleast 6 characters." ;
 }
 
$password = hash('sha256' , $pass);

 if( !$error ) {
  
  $query = "INSERT INTO users(userName,userEmail,userPass) VALUES('$name','$email','$password')";
  $res = mysqli_query($conn, $query);
  
  if ($res) {
   $errTyp = "success";
   $errMSG = "Successfully registered, you may login now";
   unset($name);
   unset($email);
   unset($pass);
  } else  {
   $errTyp = "danger";
   $errMSG = "Something went wrong, try again later..." ;
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
  <a class="navbar-brand" href = "index.php">Back to the Login</a>
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
   <form method="post"  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"  autocomplete="off" >
  
      
            <h2>Sign Up.</h2>
            <hr />
          
            <?php
   if ( isset($errMSG) ) {
  
   ?> 
           <div  class="alert alert-<?php echo $errTyp ?>" >
                         <?php echo  $errMSG; ?>
       </div>

<?php 
  }
  ?> 
          
      
          

            <input type ="text"  name="name"  class ="form-control"  placeholder ="Enter Name"maxlength ="50"/>
      
            <span class = "text-danger"> <?php echo $nameError;?> </span>
          
    

            <input   type = "email"   name = "email"   class = "form-control"   placeholder = "Enter Your Email"   maxlength = "40"/>
    
               <span class = "text-danger"> <?php echo $emailError; ?> </span>
      
          
      
            
        
            <input   type = "password"   name = "pass"   class = "form-control"   placeholder = "Enter Password"   maxlength = "15"  />
            
               <span class = "text-danger"> <?php echo $passError; ?> </span>
      
            <hr/>

          
            <button   type = "submit"   class = "btn btn-block btn-primary"   name = "btn-signup" >Sign Up</button >
            <hr/>
          
            
    
  
   </form >
</body >
</html >
<?php  ob_end_flush(); ?>