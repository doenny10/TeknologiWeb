<?php
session_start();
if(isset($_SESSION['id'])){
	//jika sudah login ada idnya tidak bisa masuk ke register.php ini
	header('Location: home.php');
}
else{
	//jika tidak login bisa register
	if(isset($_SESSION['user'])){
		$var_name = $_SESSION['user'];		
	}
	else{
		$var_name = "";
	}


	if(isset($_SESSION['username'])){
		$var_username = $_SESSION['username'];		
	}
	else{
		$var_username = "";
	}

	if(isset($_SESSION['pass'])){
		$var_pass = $_SESSION['pass'];		
	}
	else{
		$var_pass = "";
	}

	if(isset($_SESSION['email'])){
		$var_email = $_SESSION['email'];		
	}
	else{
		$var_email = "";
	}

	if(isset($_SESSION['address'])){
		$var_address = $_SESSION['address'];		
	}
	else{
		$var_address = "";
	}

	if(isset($_SESSION['gender'])){
		$var_gender = $_SESSION['gender'];		
	}
	else{
		$var_gender = "";
	}
}
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Pasto :)</title>
	<link rel="shortcut icon" href="spaghetti.ico">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


	<link rel="stylesheet" type="text/css" href="navbar.css">
	<link rel="stylesheet" type="text/css" href="socialiconcss.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/bootstrap-select.css">
<script>
		$(document).ready(function(){
				var name = $("#name");
				var username = $("#username");
				var address = $("#address");
				var email = $("#email");
				var city = $("#city");
				var gender = $("#gender");
				var password = $("#password");
				
			$('button').on('click',function(){
				if(name.val() == ""){
					alert("Please Input Your Name !");
				}
				else if(username.val() == ""){
					alert("Please Input Your Username !");
				}
				else if(password.val() == ""){
					alert("Please Input Your Password");
				}
				else if(address.val() == ""){
					alert("Please Input Your Address !");
				}
				else if(email.val() == ""){
					alert("Please Input Your Email !");
				}
				else if(city.val() == ""){
					alert("Please Input Your City !");
				}
				else if(gender.val() == ""){
					alert("Please Input Choose Gender !");
				}
			});
		});
</script>

</head>
<body style="background-image: url(cream.jpg)">
		<div id="navbar" class="col-md-12" style="background-color: #f1885b; position: fixed; z-index: 1;">
			<div class="row">
				<div class="col-md-4" >
			     
			    </div>
			    <div class="col-md-4 d-flex justify-content-center">
			      <a href="#"><img src="PastoPNGnobunder.png" class="img-fluid" height="100px" width="120px"></a>
			    </div>
			    <div class="col-md-4" >
			    </div>
		</div>
		<!-- ====================================================================================================================== -->
			<div id="jarak1"  class="row" style="background-color: #f1885b">
				<div class="col-lg-12 d-flex justify-content-center" >
					<img src="line1.png" width="1200x">
					<br>
				</div>
			</div>
			
			<!-- ====================================================================================================================== -->
			<div id="jarak2" class="row">
				<div class="col-lg-12" >
					<br>
				</div>
			</div>
			<!-- ====================================================================================================================== -->


		</div>

		<div class="col-md-12" style="background-color: black; margin-bottom: 150px;">
		</div>

		<div class="col-md-12" style="z-index: 0;">
			<!-- ====================================================================================================================== -->
				<div class="row">
					<div class="col-md-4">
					</div>

					<div class="col-md-4">
					<form action="database.php" method="POST">
					<div class="form-row">
						<h1>Register</h1>
					</div> 
		  		
		  			<div class="form-group">
		    			<label for="labelNama">Name</label>
		    			<input type="text" class="form-control" id="name" name = "name" placeholder="Name" value="<?php echo $var_name?>">
		  			</div>

		  			<div class="form-group">
		    			<label for="labelUsernam">Username</label>
		    			<div class="input-group-prepend">
      						<div class="input-group-text">@</div>
      						<input type="text" class="form-control" id="username" name = "username" placeholder="Username" value="<?php echo $var_username?>">
    					</div>
		  			</div>

		  			<div class="form-group">
		    			<label for="labelAlamat">Password</label>
		    			<input type="password" class="form-control" id="password" name = "password" placeholder="Password" value="<?php echo $var_pass?>">
		  			</div>

		  			<div class="form-group">
		    			<label for="labelEmail">Email</label>
		    			<input type="text" class="form-control" id="email" name = "email" placeholder="Email" value="<?php echo $var_email?>">
		  			</div>
		  		
		  			<div class="form-row">
		    		<div class="form-group col-md-6">
		      			<label for="inputCity">Address</label>
		      			<input type="text" class="form-control" id="address" name="address" placeholder="Address" value="<?php echo $var_address?>">
		    		</div>
		    	
		    		<div class="form-group col-md-6">
		      			<label for="inputState">Gender</label>
		      			<select id="inputState" class="form-control" name = "gender" style="width: 230px; height: 35px;">
		        			<?php
		        				if($var_gender == "Male"){
		        					echo '<option value="">Choose..</option>
		        						  <option selected value="Male">Male</option>
		        						  <option value="Female">Female</option> ';
		        				}
		        				elseif($var_gender == "Female"){
		        					echo '<option value="">Choose..</option>
		        						  <option value="Male">Male</option>
		        						  <option selected value="Female">Female</option>'; 
		        				}
		        				else{
		        					echo '<option selected value="">Choose..</option>
		        						  <option value="Male">Male</option>
		        						  <option value="Female">Female</option>';
		        				}
		        			?>
		      			</select>
		    		</div>
		  		</div>

		  		<button type="submit" class="btn btn-primary" name="insert" div="insert">Sign in</button>
				</form>
		 		</div>

		 		<div class="col-md-4">
		 		</div>
 			</div>
		</div>


		<!-- 		FOOOTTTEERRR -->
		<div class="col-md-12">
			<div>
				<br>
			</div>

			<div class="row" style="background-color: #f1885b; padding-bottom: 30px; margin-top: 50px;">	
			</div>

			<div class="container-fluid padding">
			<div class="row text-center">
				<div class="col-md-4">
					<hr class="light">
					<h5> Contact Us </h5>
					<hr class="light">
					<p> 031-14045 </p>
					<p> pastapasto@gmail.com </p>
					<p> Jl. Siwalankerto 121</p>
					<p> Surabaya, Indonesia </p>
				</div>
				<div class="col-md-4">	
					<hr class="light">
					<h5> Our Hours </h5>
					<hr class="light">
					<p> Monday : 8 am - 8 pm </p>
					<p> Saturday : 8am - 6 pm </p>
					<p> Sunday : Closed </p>
				</div>
				<div class="col-md-4">
					<hr class="light">
					<h5> Store Locations </h5>
					<hr class="light">
					<p> Siwalankerto </p>
					<p> Darmo </p>
					<p> Dharmahusada </p>
				</div>

				<div class="col-12">
					<div class="container">
						<div class="text-center center-block">
							<a href="https://www.facebook.com"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
							<a href="https://twitter.com"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
							<a href="https://plus.google.com"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
							<a href="mailto:m26416064@john.petra.ac.id"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
						</div>
					</div>
				</div>

				<div class="col-12">
					<hr class="light-100">
					<h7> Copyright © 2018 D.D.A Web Technology Project</h7>
					<a href="javascript:" id="return-to-top" style="display: inline;"></a>
				</div>

				<div class="col-12">
					<hr class="light-100">
					<a href="javascript:" id="return-to-top" style="display: inline;"></a>
				</div>
			</div>
			</div>
			<div class="row" style="background-color: #f1885b; padding-bottom: 30px">	
			</div>
		</div>
</body>
</html>