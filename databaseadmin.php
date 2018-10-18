<?php
session_start();
	$con=mysqli_connect("localhost", "root", "", "tekweb");


if(isset($_POST['signinadmin'])){
	$name=$_POST["nameadmin"];
	$pass=$_POST["password"];
	$result = mysqli_query($con, "SELECT * FROM adminpasto");

	$true = false;
	while($row = mysqli_fetch_array($result)){
			if($row['name'] == $name && $row['password'] == $pass ){
			$_SESSION['idadmin'] = $row['id'];
			$_SESSION['nameadmin'] = $row['name'];
			$_SESSION['password'] = $row['password'];
			$_SESSION['phone'] = $row['phone'];
			$_SESSION['address'] = $row['address'];
			$true = true;
			break;
			}
	}
	if($true){
			$_SESSION['id'] = $row['id'];
			$_SESSION['name'] = $row['name'];
			$_SESSION['password'] = $row['password'];
			$_SESSION['phone'] = $row['phone'];
			$_SESSION['address'] = $row['address'];
			$var_failed = '';
			header("Location: adminuser.php");
		}
		else{
			$var_failed = 'adminuser';
			$_SESSION['failed'] = $var_failed;
			header("Location: admin.php");
		}
}

if(isset($_POST['destroyadmin'])){
		session_start();
		session_destroy();
		header("location: admin.php");
	}
?>