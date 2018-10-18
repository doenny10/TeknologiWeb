<?php
		$id=$_GET["id"];
		echo $id;
		$con=mysqli_connect("localhost", "root", "", "tekweb");
		mysqli_query($con,"DELETE FROM userpasto WHERE id = '$id'");
		header("Location: adminuser.php");
?>