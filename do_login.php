<?php

include('dbconnection.php');

if(isset($_POST['login'])){
$output ='';
	$username = $_POST["username"];
	$password=$_POST["password"];
	
	if(empty($username) && empty($password) OR empty($username) OR empty($password)){
		$output="<h4 style='color:red'>"."Field can not be left empty"."</h4>";

		}else{
	$sql = mysqli_query($conn, "SELECT username, password, usertype FROM users");
	
	while($row = mysqli_fetch_array($sql)){
		$nusername = $row['username'];
		$npassword = $row['password'];
		$nuser_type = $row['usertype'];
		
	if($username == $nusername && $password == $npassword){
	
	session_start();
	$_SESSION['username']= $nusername;
	$_SESSION['usertype']=$nuser_type;
	
	
	if($_SESSION['usertype']=='admin'){
	header('location:home.php');
	}
	else
	{
		header('location:viewtimetable.php');
	}
	
	}else{
		
		$output="<h4 style='color:red'>"."Wrong Username or Password"."</h4>";
	
	}
	
	}
		}
}
?>