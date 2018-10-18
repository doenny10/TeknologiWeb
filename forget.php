<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Pasto :)</title>
	<link rel="shortcut icon" href="spaghetti.ico">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script type="jquery-3.3.1.js"></script>
	<link rel="stylesheet" type="text/css" href="navbar.css">
	<script type="text/javascript">
		$(document).ready(function(){
			$('button').on('click',function(){

				if(name.val() == ''){
					alert("Please Fill Your Name !");
					name = name.val();
				}
				else if(username.val() == ''){
					//name.val() = localstorage.getItem("namequery");
					alert("Please Fill Your Username !");
					//localstorage.setItem("name",name.val());
					
				}
				else if(address.val() == ''){
					alert("Please Fill Your Address !");
				}
				else if(email.val() == ''){
					alert("Please Fill Your Email !");
				}
				else if(city.val() == ''){
					alert("Please Fill Your City !");
				}
				else if(gender.val() == ''){
					alert("Please Choose Your Gender !");
				}
				else{
					alert("Are You Sure Change Your Profile ?");
				}
			});
		}

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
						<h1>Settings</h1>
					</div> 
		  			
					<div class="form-group">
		    			<label for="labelNama">ID</label>
		    			<input type="text" class="form-control" id="id" name = "id" placeholder="ID" value="<?php echo $var_id?>" disabled>
		  			</div>

		  			<div class="form-group">
		    			<label for="labelNama">Name</label>
		    			<input type="text" class="form-control" id="name" name = "name" placeholder="Name" value="<?php echo $var_user?>">
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
		    			<input type="password" class="form-control" id="password" name = "password" placeholder="Password" value="<?php echo $var_password?>">
		  			</div>

		  			<div class="form-group">
		    			<label for="labelEmail">Email</label>
		    			<input type="text" class="form-control" id="email" name = "email" placeholder="Email" value="<?php echo $var_email?>">
		  			</div>
		  		
		  			<div class="form-row">
		    		<div class="form-group col-md-6">
		      			<label for="inputCity">Address</label>
		      			<input type="text" class="form-control" id="address" name="address" value="<?php echo $var_address?>">
		    		</div>
		    	
		    		<div class="form-group col-md-6">
		      			<label for="inputState">Gender</label>
		      			<select id="inputState" class="form-control" name = "gender">
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
		  

		  		<div class="form-group">
		    		<div class="form-check">
		      			<input class="form-check-input" type="checkbox" id="gridCheck">
		      			<label class="form-check-label" for="gridCheck">
		        		Check me out
		      			</label>
		    		</div>
		  		</div>
		  		<button type="submit" class="btn btn-primary" name="update" div="update">Save</button>
				</form>
		 		</div>

		 		<div class="col-md-4">
		 		</div>
 			</div>
		</div>

		<div class="col-md-12">
			<br>
		</div>

		<div class="col-md-12">

		</div>
</body>
<footer>
		<div class="container-fluid padding" style="background-color: #f1885b">
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
</footer>
</html>