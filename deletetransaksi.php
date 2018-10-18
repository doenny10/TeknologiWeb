<?php
		$id=$_GET["id"];
		echo $id;
		$con=mysqli_connect("localhost", "root", "", "tekweb");
		mysqli_query($con,"DELETE FROM cartpasto WHERE id = '$id'"); 
		header("Location: admintransaksi.php");
?>