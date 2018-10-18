<?php
session_start();
$con=mysqli_connect("localhost", "root", "", "tekweb");
if(isset($_SESSION['user'])){



	if(isset($_POST['addtocart'])){
		$iduser = $_SESSION['id'];
		$idmenu = $_POST['lunch'];
		$quantity = $_POST['quantity'];
		$datetime = date("Y-m-d h:i:sa");

		

		mysqli_query($con,"INSERT INTO cartpasto VALUES (null, '$iduser', '$idmenu', '$quantity', 0, '$datetime')");
		echo "<script> alert('Your Order is Saved'); window.location.href='home.php';</script>";		

	}
	
}
else {
	echo "<script> alert('Please Login / Register First !'); window.location.href='home.php';</script>";
}

?>