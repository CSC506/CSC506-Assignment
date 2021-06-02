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
echo"<tr style=\"background:silver;\"><th>ID</th><th>FIRST NAME</th><th>LAST NAME</th><th>E-MAIL</th><th>PHONE</th><th>ADDRESS</th><th>UPDATE</th></tr>";

$query = "SELECT * FROM studentinfo";
$exec = mysqli_query($conn, $query);
while($row = mysqli_fetch_assoc($exec)){
  
  $id = $row['id'];
   $firstname = $row['first_name'];
  $lastname = $row['last_name'];
  $email = $row['email'];
  $phone = $row['phone'];
  $address = $row['address'];;
  $pixs = $row['picture'];
  
  
  echo"<tr><td>$id</td>
  <td>$firstname</td>
  <td>$lastname</td>
  <td>$email</td>
  <td> $phone</td>
  <td>$address</td>
  <td><a href=\"edit.php?ids=$id&firstnames=$firstname&lastnames=$lastname&emails=$email&phones=$phone&addressss=$address\">update</a></td></tr>";
  
}




?>

</div>
</div>
</div>
    


<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>