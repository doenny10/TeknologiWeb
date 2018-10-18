<?php
session_start();
if(empty($_SESSION['user'])){
	header("location: home.php");
}
else{	
		$con=mysqli_connect("localhost", "root", "", "tekweb");
		$iduser = $_SESSION['id'];
		$result = mysqli_query($con, "SELECT * FROM cartpasto where iduser = '$iduser' AND status = 0");
		while($row = mysqli_fetch_array($result)){
			$idmenu = $row['idmenu'];
			$quantity = $row['quantity'];
			$id = $row['id'];
			mysqli_query($con,"UPDATE cartpasto SET iduser = '$iduser', idmenu = '$idmenu', quantity = '$quantity', status = 1 WHERE id = '$id' ");
		}
		echo "<script> alert('Your Order is Confirmed'); window.location.href='home.php';</script>";

}	
?>
