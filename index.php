<?php

include('dbconnection.php');
if(isset($_POST['login'])){
$output ='';
	$username = $_POST["username"];
	$password=$_POST["password"];
	
	if(empty($username) && empty($password) OR empty($username) OR empty($password)){
		$output="<h4 style='color:red'>"."Field can not be left empty"."</h4>";

		}else{
	$sql = mysqli_query($conn, "SELECT username, password, email FROM users");
	
	while($row = mysqli_fetch_array($sql)){
		$nusername = $row['username'];
		$nemail = $row['email'];
		$npassword = $row['password'];

	if($username == $nusername && $password == $npassword){
	
	session_start();
	$_SESSION['username']= $nemail;
	
	header('location:profile.php');
	}else{
		
		$output="<h4 style='color:red'>"."Wrong Username or Password"."</h4>";
	
	}
	
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
	<div class="col-lg-4">
	</div>
	<div class="col-lg-4">
	</div>

	<div class="col-lg-4" style="background-color:#ffffff; float: right; padding:20px; border-radius: 20px">
	<form action="index.php" method="post">
	  <div class="form-group">
	    <input type="text" name="username" class="form-control" placeholder="Enter Username">
	  </div>
	  <p></p>
	  <div class="form-group">
	    <input type="password" name="password"  class="form-control" id="exampleInputPassword1" placeholder="Password">
	  </div>
	  	  <p></p>
	  <div class="form-check">
	    <input type="checkbox" class="form-check-input" id="exampleCheck1">
	    <label class="form-check-label" for="exampleCheck1">Remember me</label>
	  </div>
	  	  <p>
	  	  	
	  	  </p>
	  <button type="submit" name="login" class="btn btn-danger">Login</button>
	  <p>
	  	<a href="createaccount.php">Not Registered yet? Register here</a>
	  </p>
	</form>
	<p>	   <?php if(isset($_POST['login'])){echo $output;}?></p>
</div>
</div>
<!--End login form-->
</div>
		


<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>