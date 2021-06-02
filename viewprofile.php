<?php include('redirect.php');?>

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
             <a class="nav-link" href="updateprofile.php">Update Profile</a>
            </li>
              <li class="nav-item">
             <a class="nav-link" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!--END NAV-->
<div class="container" style="margin:100px;">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6" style="background-color: white">
<?php
if (!isset($_SESSION['username'])) {
        header('Location: index.php');
}
include('dbconnection.php');

echo"<table class='table table-bordered table-striped table-hover'>";
echo"<tr style=\"background:silver;\"></tr>";

$query = "SELECT * FROM registration";

$exec = mysqli_query($conn, $query);
while($row = mysqli_fetch_assoc($exec)){

  $firstname = $row['first_name'];
  $lastname = $row['last_name'];
  $email = $row['email'];
  $phone = $row['phone'];
  $address = $row['address'];;
  $pixs = $row['picture'];
  
  ?>

  <tr><th>PICTURE</th><td><img src="<?php echo $pixs;?>" height="50px" width="50px"/></td></tr>
  <tr><th>FIRST NAME</th><td><?php echo $firstname; ?></td><tr>
  <tr><th>LAST NAME</th><td><?php echo $lastname; ?></td><tr>
  <tr><th>E-MAIL</th><td><?php echo $email; ?></td><tr>
  <tr><th>PHONE</th><td><?php echo $phone; ?></td><tr>
  <tr><th>ADDRESS</th><td><?php echo$address; ?></td><tr>
  
  
<?php

  }




?>

</div>
</div>
</div>
    


<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>