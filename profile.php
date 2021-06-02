<?php
include('dbconnection.php');
include('redirect.php');
if(isset($_POST['register'])){
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$filename = $_FILES['file']['name'];
$tmp_name = $_FILES['file']['tmp_name'];

$location = 'images/'.$filename;

move_uploaded_file($tmp_name,$location);

$query ="INSERT INTO registration(first_name,last_name,email,phone,address,picture)VALUE('$firstname','$lastname','$email','$phone','$address','$location')";
$result =mysqli_query($conn,$query);
if($result){
  
  $msg='<p style="color:blue;">'.'Account Created successfully'.'</p>';
}else{
  $msg="There is problem submitting your data";
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
        <a class="navbar-brand" href="home.php"><img src="images/logo.fw.png" />WEB DEVELOPMENT ASSIGNMENT 1</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
           <li class="nav-item active">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
             <a class="nav-link" href="viewprofile.php">View Profile</a>
            </li>
            <li class="nav-item">
             <a class="nav-link" href="viewprofile.php">Update Profile</a>
            </li>
              <li class="nav-item">
             <a class="nav-link" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!--END NAV-->
<div class="container" style="margin-bottom: 100px">
<!--Login form-->
<div class="row" style="margin-top: 100px;">
  <div class="col-lg-3"></div>
  
  <div class="col-lg-6" style="background-color:#ffffff; float: right; padding:40px; border-radius: 20px">
  <form action="profile.php" method="post" enctype="multipart/form-data">
     <div class="form-group">
      <input type="file" name="file" class="form-control">
     </div>
     <p></p>
    <div class="form-group">
      <input type="text" name="fname" class="form-control" placeholder="Enter First name">
    </div>
    <p></p>
     <div class="form-group">
      <input type="text" name="lname" class="form-control" placeholder="Enter Surname">
    </div>
    <p></p>
     <div class="form-group">
      <input type="text" name="email" class="form-control" placeholder="Enter Email">
    </div>
           <p></p>
   
   <div class="form-group">
      <input type="text" name="phone" class="form-control" placeholder="Enter phone number">
    </div>
           <p>
        </p>
           <div class="form-group">
     <textarea class="form-control" name="address" placeholder="Enter Address"></textarea>
    </div>
        <p></p>
    <button type="submit" name="register" class="btn btn-danger">Register</button>
  </form>
</div>
 <div class="col-lg-3"></div>
</div>
<!--End login form-->
</div>
    


<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>