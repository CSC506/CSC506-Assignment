<?php
include('dbconnection.php');
if(isset($_POST['registration'])){
  $output ='';
  $username = $_POST["username"];
   $email = $_POST["email"];
  $password=$_POST["password"];
  $cpassword=$_POST["cpassword"];

  if($cpassword !=$password){
    $output = "<div class='alert-danger'>"."Password Mismatched"."</div>";
  }
elseif(empty($username or $password)){
    $output = "<div class='alert-danger'>"."Field cannot be empty"."</div>";
  }
  else{
$query = "INSERT INTO users(username, email, password)VALUES('$username',' $email','$password')";
  $exec=mysqli_query($conn, $query);
  if($exec){
    $output = "<div class='alert-success'>"."Registration Successfull"."</div>";
    }
  }

  }

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body style="background-color: #DCDCDC">
  <!--NAV-->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#800000">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="images/logo.fw.png" /> WEB DEVELOPMENT ASSIGNMENT 1</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul>

          </ul>
        </div>
      </div>
    </nav>

    <!--END NAV-->
<div class="container" >
<!--Login form-->
<div class="row" style="margin-top: 100px;">
  <div class="col-lg-4"></div>
   <div class="col-lg-4"></div>
  <div class="col-lg-4" style="background-color:#ffffff; float: right; padding:40px; border-radius: 20px">
    <?php if(isset($_POST['registration'])){echo $output;}?>
  <form action="createaccount.php" method="post">
    <div class="form-group">
      <input type="text" name="username" class="form-control" placeholder="Enter Username">
    </div>
    <p></p>
      <div class="form-group">
      <input type="text" name="email" class="form-control" placeholder="Enter Email">
    </div>
    <p></p>
     <div class="form-group">
      <input type="password" name="password" class="form-control" placeholder="Enter Password">
    </div>
    <p></p>
     <div class="form-group">
      <input type="password" name="cpassword" class="form-control" placeholder="Confirm Password">
    </div>
           <p>
        
        </p>
   
   
        <p></p>
    <button type="submit" name="registration" class="btn btn-danger">Register</button>
    <p>
        <a href="index.php">Already Registered? login here</a>
    </p>
  </form>
</div>
</div>
<!--End login form-->
</div>
    


<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>