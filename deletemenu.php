<?php
		$id=$_GET["id"];
		$kategori = $_GET['category'];
		echo $id;
		echo $kategori;
		$con=mysqli_connect("localhost", "root", "", "tekweb");
		mysqli_query($con,"DELETE FROM menupasto WHERE id = '$id'"); 
		if($kategori == 1){
			header("Location: adminmenu1.php");
		}
		elseif($kategori == 2){
			header("Location: adminmenu2.php");
		}
		elseif($kategori == 3){
			header("Location: adminmenu3.php");
		}
?>