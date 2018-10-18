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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
echo" <div class='alert alert-primary alert-dismissible fade show' role='alert'>
Wrong Username / Password !
<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
  <span aria-hidden='true'>&times;</span>
</button>
</div>"
?>
</head>
<body style="background-image: url(cream.jpg)">
		<div id="navbar" class="col-md-12" style="background-color: #f1885b; position: fixed; z-index: 1;">
			<div class="row">
				<div class="col-md-4" >
			      	<div class="btn-group">
  						<button type="button" class="btn btn-secondary btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style=" background-color: #f1885b;">
   					 	<span class="material-icons"></span> Want to Order ?
  						</button> 
  						<!-- form drop down -->
 				 		<div class="dropdown-menu">
							  <form class="px-4 py-3" action="database.php" method="POST">
							    <div class="form-group">
							      <label for="username">Username</label>
							      <input type="text" class="form-control" id="username" placeholder="Username" name="username">
							    </div>
							    <div class="form-group">
							      <label for="password">Password</label>
							      <input type="password" class="form-control" id="password" placeholder="Password" name="password">
							    </div>
							    <div class="form-check">
							      <input type="checkbox" class="form-check-input" id="dropdownCheck">
							      <label class="form-check-label" for="dropdownCheck">
							        Remember me
							      </label>
							    </div>
							    <button type="submit" class="btn btn-primary" name="signin" id="signin">Sign in</button>
							  </form>
							  <div class="dropdown-divider"></div>
							  <a class="dropdown-item" href="register.php">New around here? Sign up</a>
							  <a class="dropdown-item" href="#">Forgot password?</a>
						</div>
					</div>
			    </div>
			    <div class="col-md-4 d-flex justify-content-center">
			      <a href="#"><img src="PastoPNGnobunder.png" class="img-fluid" height="100px" width="120px"></a>
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
			<div id="navbar" class="row" style="background-color: #f1885b">
				<div class="col-lg-12" >
					<nav class="nav nav-pills nav-fill">
			  			<a class="nav-item nav-link active" href="home.php"><img src="[navbar] hotptomo.png" height="50px" width="70px"></a>
						<a class="nav-item nav-link" href="pasta.php"><img src="[navbar] pasta.png" height="50px" width="70px"></a>
						<a class="nav-item nav-link" href="rice.php"><img src="[navbar] rice.png" height="50px" width="70px"></a>
						<a class="nav-item nav-link" href="other.php"><img src="[navbar] drink.png" height="50px" width="70px"></a>
						<a class="nav-item nav-link" href="packages.php"><img src="[navbar] packages.png" height="50px" width="70px"></a>
					</nav>
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


		<div class="col-md-12" style="background-color: black; margin-bottom: 200px;">

		</div>

		<div class="col-md-12" style="z-index: 0;">
			<div>
				<br>
			</div>

			<!-- ====================================================================================================================== -->
			<div class="row">
				<div class="col-sm-1">
					<br>
			    </div>
			    <!-- ====================================================================================================================== -->

			    <div class="col-sm-10">

				    	<div id="carousel1" class="carousel slide" data-ride="carousel">
							  <ol class="carousel-indicators">
							    <li data-target="#carousel1" data-slide-to="0" class="active"></li>
							    <li data-target="#carousel1" data-slide-to="1"></li>
							    <li data-target="#carousel1" data-slide-to="2"></li>
							    <li data-target="#carousel1" data-slide-to="3"></li>
							  </ol>

						  <div class="carousel-inner">
							    <div class="carousel-item active">
							      <img class="d-block w-100" src="banner1.jpg" >
							    </div>
							    <div class="carousel-item">
							      <img class="d-block w-100" src="banner2.jpg" >
							    </div>
							    <div class="carousel-item">
							      <img class="d-block w-100" src="banner3.jpg" >
							    </div>
							    <div class="carousel-item">
							      <img class="d-block w-100" src="banner4.jpg" >
							    </div>
						  </div>

						  <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
							    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
							    <span class="sr-only">Previous</span>
						  </a>

						  <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
							    <span class="carousel-control-next-icon" aria-hidden="true"></span>
							    <span class="sr-only">Next</span>
						  </a>
					</div>

					<!-- ====================================================================================================================== -->

					<div id="jarak3">
						<br>
					</div>

					<!-- ====================================================================================================================== -->

					<div id="isi" class="row justify-content-md-center">
						<div class="col-md-6 d-flex justify-content-center" >
					      	<a href="#"><img src="promo1.jpg"></a>
					    </div>
					    <div class="col-md-6 d-flex justify-content-center" >
					      	<a href="#"><img src="promo2.jpg"></a>
					    </div>
					    
					</div>

					<!-- ====================================================================================================================== -->


					<div id="jarak4">
						<br>
					</div>

		<!-- ====================================================================================================================== -->


					<div id="isi" class="row justify-content-md-center">
							<div class="col-md-6 d-flex justify-content-center" >
						      	<a href="#"><img src="promo2.jpg"></a>
						    </div>
						    <div class="col-md-6 d-flex justify-content-center" >
						      	<a href="#"><img src="promo1.jpg"></a>
						    </div>
						    
					</div>

					<!-- ====================================================================================================================== -->


				</div>

			    <div class="col-sm-1">
					<br>
			    </div>
			    <!-- ====================================================================================================================== -->
				
			</div>
		</div>

		<div class="col-md-12">
			<div>
				<br>
			</div>

			<!-- ====================================================================================================================== -->
			<div class="row" style="background-color: #f1885b; padding-bottom: 300px">
				
			</div>
		</div>
</body>
<!--FOOTER-->
<footer>
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
</footer>
</html>