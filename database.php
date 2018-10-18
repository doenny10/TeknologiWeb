<?php
session_start();
	$con=mysqli_connect("localhost", "root", "", "tekweb");

//------------------- REGISTER -------------------------------------------------------------------
	if(isset($_POST['insert'])){
		$name=$_POST["name"];
		$username=$_POST["username"];
		$password=$_POST["password"];
		$email=$_POST["email"];
		$address=$_POST["address"];
		$gender=$_POST["gender"];

		if($name == ""){
			$_SESSION['user'] = "";
			$_SESSION['username'] = $usernamename;
			$_SESSION['pass'] = $password;
			$_SESSION['email'] = $email;
			$_SESSION['address'] = $address;
			$_SESSION['gender'] = $gender;
			header("Location: register.php");
		}
		else if($username == ""){
			$_SESSION['username'] = "";
			$_SESSION['user'] = $name;
			$_SESSION['pass'] = $password;
			$_SESSION['email'] = $email;
			$_SESSION['address'] = $address;
			$_SESSION['gender'] = $gender;
			header("Location: register.php");
		}
		elseif ($password == "") {
			$_SESSION['pass'] = "";
			$_SESSION['username'] = $username;
			$_SESSION['user'] = $name;
			$_SESSION['email'] = $email;
			$_SESSION['address'] = $address;
			$_SESSION['gender'] = $gender;
			header("Location: register.php");
		}
		elseif ($email == ""){
			$_SESSION['email'] = "";
			$_SESSION['username'] = $username;
			$_SESSION['user'] = $name;
			$_SESSION['pass'] = $password;
			$_SESSION['address'] = $address;
			$_SESSION['gender'] = $gender;
			header("Location: register.php");
		}
		elseif ($address == "") {
			$_SESSION['address'] = "";
			$_SESSION['username'] = $username;
			$_SESSION['user'] = $name;
			$_SESSION['pass'] = $password;
			$_SESSION['email'] = $email;
			$_SESSION['gender'] = $gender;
			header("Location: register.php");
		}
		elseif ($gender == "") {
			$_SESSION['gender'] = "";
			$_SESSION['username'] = $username;
			$_SESSION['user'] = $name;
			$_SESSION['pass'] = $password;
			$_SESSION['email'] = $email;
			$_SESSION['address'] = $address;
			header("Location: register.php");
		}
		else{
			echo "<script> alert('You Have Been Registered ! Your Name is ".$name." and Your Username is ".$username." Please Log in Again ! Thankyou')</script>";
			echo "<script>setTimeout(\"location.href = 'home.php';\",1000);</script>";
			mysqli_query($con,"INSERT INTO userpasto VALUES (null, '$name', '$username', '$password', '$email', '$address', '$gender')");
			session_destroy();
		}
	}


//----------SIGN IN--------------------------------------------------------------------------
	if(isset($_POST['signinhome'])){
		$user=$_POST["username"];
		$pass=$_POST["password"];
		$result = mysqli_query($con, "SELECT * FROM userpasto");

		$true = false;
		while($row = mysqli_fetch_array($result)){
		if($row['username'] == $user && $row['password'] == $pass ){
			$_SESSION['id'] = $row['id'];
			$_SESSION['user'] = $row['name'];
			$_SESSION['username'] = $row['username'];
			$_SESSION['pass'] = $row['password'];
			$_SESSION['email'] = $row['email'];
			$_SESSION['address'] = $row['address'];
			$_SESSION['gender'] = $row['gender'];
			$true = true;
			break;
		}
	}
		if($true){
			$_SESSION['id'] = $row['id'];
			$_SESSION['user'] = $row['name'];
			$_SESSION['username'] = $row['username'];
			$_SESSION['pass'] = $row['password'];
			$_SESSION['email'] = $row['email'];
			$_SESSION['address'] = $row['address'];
			$_SESSION['gender'] = $row['gender'];
			$var_failed = '';
			header("Location: home.php");
		}
		else{
			$var_failed = 'home';
			$_SESSION['failed'] = $var_failed;
			header("Location: home.php");
		}
	}
	elseif(isset($_POST['signinpasta'])){
		$user=$_POST["username"];
		$pass=$_POST["password"];
		$result = mysqli_query($con, "SELECT * FROM userpasto");

		$true = false;
		while($row = mysqli_fetch_array($result)){
		if($row['username'] == $user && $row['password'] == $pass ){
			$true = true;
			break;
		}
	}
		if($true){
			$_SESSION['id'] = $row['id'];
			$_SESSION['user'] = $row['name'];
			$_SESSION['username'] = $row['username'];
			$_SESSION['pass'] = $row['password'];
			$_SESSION['email'] = $row['email'];
			$_SESSION['address'] = $row['address'];
			$_SESSION['gender'] = $row['gender'];
			$var_failed = '';			
			header("Location: pasta.php");
		}
		else{
			$var_failed = 'pasta';
			$_SESSION['failed'] = $var_failed;
			header("Location: pasta.php");
		}
	}
	elseif(isset($_POST['signinrice'])){
		$user=$_POST["username"];
		$pass=$_POST["password"];
		$result = mysqli_query($con, "SELECT * FROM userpasto");

		$true = false;
		while($row = mysqli_fetch_array($result)){
		if($row['username'] == $user && $row['password'] == $pass ){
			$true = true;
			break;
		}
	}
		if($true){
			$_SESSION['id'] = $row['id'];
			$_SESSION['user'] = $row['name'];
			$_SESSION['username'] = $row['username'];
			$_SESSION['pass'] = $row['password'];
			$_SESSION['email'] = $row['email'];
			$_SESSION['address'] = $row['address'];
			$_SESSION['gender'] = $row['gender'];
			$var_failed = '';			
			header("Location: rice.php");
		}
		else{
			$var_failed = 'rice';
			$_SESSION['failed'] = $var_failed;
			header("Location: rice.php");
		}
	}
		elseif(isset($_POST['signinother'])){
		$user=$_POST["username"];
		$pass=$_POST["password"];
		$result = mysqli_query($con, "SELECT * FROM userpasto");

		$true = false;
		while($row = mysqli_fetch_array($result)){
		if($row['username'] == $user && $row['password'] == $pass ){
			$true = true;
			break;
		}
	}
		if($true){
			$_SESSION['id'] = $row['id'];
			$_SESSION['user'] = $row['name'];
			$_SESSION['username'] = $row['username'];
			$_SESSION['pass'] = $row['password'];
			$_SESSION['email'] = $row['email'];
			$_SESSION['address'] = $row['address'];
			$_SESSION['gender'] = $row['gender'];
			$var_failed = '';
			header("Location: other.php");
		}
		else{
			$var_failed = 'other';
			$_SESSION['failed'] = $var_failed;
			header("Location: other.php");
		}
	}
	elseif(isset($_POST['signinpackages'])){
		$user=$_POST["username"];
		$pass=$_POST["password"];
		$result = mysqli_query($con, "SELECT * FROM userpasto");

		$true = false;
		while($row = mysqli_fetch_array($result)){
		if($row['username'] == $user && $row['password'] == $pass ){
			$true = true;
			break;
		}
	}
		if($true){
			$_SESSION['id'] = $row['id'];
			$_SESSION['user'] = $row['name'];
			$_SESSION['username'] = $row['username'];
			$_SESSION['pass'] = $row['password'];
			$_SESSION['email'] = $row['email'];
			$_SESSION['address'] = $row['address'];
			$_SESSION['gender'] = $row['gender'];
			$var_failed = '';			
			header("Location: packages.php");
		}
		else{
			$var_failed = 'packages';
			$_SESSION['failed'] = $var_failed;
			header("Location: packages.php");
		}	
	}
//---------Logout Tiap Page supaya stay-----------------------------------------------------
	if(isset($_POST['destroyhome'])){
		session_start();
		session_destroy();
		header("location: home.php");
	}
	elseif(isset($_POST['destroypasta'])){
		session_start();
		session_destroy();
		header("location: pasta.php");	
	}
	elseif(isset($_POST['destroyrice'])){
		session_start();
		session_destroy();
		header("location: rice.php");	
	}
	elseif(isset($_POST['destroyother'])){
		session_start();
		session_destroy();
		header("location: other.php");	
	}
	elseif(isset($_POST['destroypackages'])){
		session_start();
		session_destroy();
		header("location: packages.php");	
	}

//------------------Setting-------------------------------------------------------------------
	//==========Dari Form DropDown Setting masuk database terus masuk ke settings.php===============
	if(isset($_POST['settings'])){
		header("Location: settings.php");
	}

	if(isset($_POST['transaksi'])){
		header("Location: mytransaction.php");
	}


	//Kalau tekan tombol update di Settings.php
	if(isset($_POST['update'])){
		// echo $_POST['oldpassword'];
		// echo $_SESSION['pass'];		

		if($_SESSION['pass'] == $_POST['oldpassword']){
			$var_id = $_SESSION["id"];
			$var_user = $_POST["name"];
			$var_username = $_POST['username'];
			$var_password = $_POST["newpassword"];
			$var_email = $_POST['email'];
			$var_address = $_POST['address'];
			$var_gender = $_POST['gender'];
			
			$_SESSION['pass'] = $_POST['newpassword'];


			mysqli_query($con,"UPDATE userpasto SET name = '$var_user', username = '$var_username', password = '$var_password', email = '$var_email',address = '$var_address', gender = '$var_gender'  WHERE id = '$var_id' ");
			
			echo "<script> alert('Your Data Have Been Updated ! Your Name is ".$var_user." and Your Username is ".$var_username." Please Log in Again ! Thankyou')</script>";
			session_destroy();
			echo "<script>setTimeout(\"location.href = 'home.php';\",1000);</script>";
		}
		else if($_SESSION['pass'] != $_POST['oldpassword']){
			echo '<script> alert("Your Profile Update Was Canceled ! Input New And Old Password ! ") </script>';
			echo "<script>setTimeout(\"location.href = 'settings.php';\",1000);</script>";
		}
	}

	//========================================= ADMIN =====================================
	if(isset($_POST['edituser'])){
		echo $var_idedit = $_POST['id'];
		echo $var_nameedit = $_POST['name'];
		echo $var_usernameedit = $_POST['username'];
		echo $var_passwordedit = $_POST['password'];
		echo $var_emailedit = $_POST['email'];
		echo $var_addressedit = $_POST['address'];
		echo $var_genderedit = $_POST['gender'];

		mysqli_query($con,"UPDATE userpasto SET name = '$var_nameedit', username = '$var_usernameedit', password = '$var_passwordedit', email = '$var_emailedit',address = '$var_addressedit', gender = '$var_genderedit'  WHERE id = '$var_idedit' ");

		header('Location: adminuser.php');
	}

	if(isset($_POST['editmenu'])){
		echo $var_id = $_POST['id'];
		echo $var_item = $_POST['item'];
		echo $var_optional = $_POST['optional'];
		echo $var_price = $_POST['price'];
		echo $var_category = $_POST['category'];
		echo $var_description = $_POST['description'];
		echo $var_photo = $_POST['photo'];

		
		mysqli_query($con,"UPDATE menupasto SET item = '$var_item', optional = '$var_optional', price = '$var_price', category = '$var_category',descript = '$var_description', photo = '$var_photo'  WHERE id = '$var_id' ");

		if($var_category == 1){
			header('Location: adminmenu1.php');
		}
		elseif ($var_category == 2) {
			header('Location: adminmenu2.php');
		}
		elseif( $var_category == 3){
			header('Location: adminmenu3.php');
		}
	}

	if(isset($_POST['addmenu'])){
		echo $var_item = $_POST['item'];
		echo $var_optional = $_POST['optional'];
		echo $var_price = $_POST['price'];
		echo $var_category = $_POST['category'];
		echo $var_description = $_POST['description'];
		echo $var_photo = $_POST['photo'];
		mysqli_query($con,"INSERT INTO menupasto VALUES (null, '$var_item', '$var_optional', '$var_price', '$var_category', '$var_description', '$var_photo')");

		if($var_category == 1){
			header("Location: adminmenu1.php");
		}
		elseif($var_category == 2){
			header("Location: adminmenu2.php");
		}
		elseif ($var_category == 3) {
			header("Location: adminmenu3.php");
		}
	}

	if(isset($_POST['edittransaksi'])){
		echo $var_id = $_POST['id'];
		echo $var_user = $_POST['user'];
		echo $var_menu = $_POST['menu'];
		echo $var_quantity = $_POST['quantity'];
		echo $var_status = $_POST['status'];

		mysqli_query($con,"UPDATE cartpasto SET iduser = '$var_user', idmenu = '$var_menu', quantity = '$var_quantity', status = '$var_status'
			WHERE id = '$var_id' ");

		header("Location: admintransaksi.php");
	}

	if(isset($_POST['edittransaksiuser'])){
		echo $var_id = $_POST['id'];
		echo $var_user = $_POST['user'];
		echo $var_menu = $_POST['menu'];
		echo $var_quantity = $_POST['quantity'];
		echo $var_status = $_POST['status'];

		mysqli_query($con,"UPDATE cartpasto SET iduser = '$var_user', idmenu = '$var_menu', quantity = '$var_quantity', status = '$var_status'
			WHERE id = '$var_id' ");

		header("Location: home.php");
	}


	if(isset($_GET['delete'])){
		$id=$_GET["id"];
		mysqli_query($con,"DELETE FROM userpasto WHERE id = '$id'"); 
		header("Location: adminuser.php");
	}
?>