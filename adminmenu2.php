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


 <?php
 	session_start();
 	if(empty($_SESSION["nameadmin"])){
		header("Location: admin.php");
	}
	if(isset($_SESSION['failed'])){
	 	$var_failed = $_SESSION['failed']; 	
	}
	else{
		$var_failed = '';
	}
 ?>

</head>

<body style="background-image: url(cream.jpg)">
		<div id="navbar" class="col-md-12" style="background-color: #f1885b; position: fixed; z-index: 1;">
			<div class="row">
				<div class="col-md-4" >
			      	<div class="btn-group">
  						<button type="button" class="btn btn-secondary btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style=" background-color: #f1885b;">
  							<span class="fa fa-user-circle"></span>
   					 	<?php
   					 	//session_start();
   					 	if(isset($_SESSION['nameadmin'])){
   					 		echo "Welcome Admin, ".$_SESSION['nameadmin']." !";   					 		
   					 	}
   					 	elseif(empty($_SESSION['nameadmin'])){
   					 		echo "Unauthorized Access !";
   					 	}
 				 		?>
  						</button> 
  						<!-- form drop down -->

 				 		<div class="dropdown-menu">
 				 		<?php

   					 	if(isset($_SESSION['nameadmin'])){
   					 		echo '<form class="px-4 py-3" action="databaseadmin.php" method="POST">
							  		<button class="dropdown-item" name="settings" id="settings" href="databaseadmin.php"><span class="fa fa-cog"></span> Settings </button>
							  		<button class="dropdown-item" name="destroyadmin" id="destroyadmin" href="databaseadmin.php"><span class="fa fa-sign-out"></span> Log Out </button>
							  </form>';   					 		
   					 	}
 				 		?>
							  
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
			  			<a class="nav-item nav-link" href="adminuser.php"><img src="[navbar]useradmin.png" height="50px" width="70px"></a>
						<a class="nav-item nav-link" href="admintransaksi.php"><img src="[navbar]transaksiadmin.png" height="50px" width="70px"></a>
						<li class="nav-item dropdown active">
					        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					        	<img src="[navbar]menuadmin.png" height="50px" width="70px">
					        </a>
					        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					          <a class="dropdown-item" href="adminmenu1.php"><img src="[navbar] pasta.png" height="50px" width="70px"> Pasta</a>
					          <a class="dropdown-item active" href="adminmenu2.php"><img src="[navbar] rice.png" height="50px" width="70px"> Rice</a>
					          <a class="dropdown-item" href="adminmenu3.php"><img src="[navbar] drink.png" height="50px" width="70px">Drink</a>
					        </div>
				      </li>
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
			<div class="col-md-5"></div>

			<div class = "col-md-3" style="margin-bottom: 20px;">
				<h1>RICE PASTO</h1>
			</div>

			<div class="col-md-4">
				<div class="col-md-12">
					<br>
				</div>
				<div class="col-md-5"></div>
				<div class="col-md-4">
					<a href="addmenu.php">Add New Menu</a>
				</div>
			</div>
		</div>

		<div class="col-md-12">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<table class="table table-bordered text-center" style="border:1px solid black;">
			<thead style="border:1px solid black;">
				<tr>
					<th style="border:3px solid black;"> ID </th>
					<th style="border:3px solid black;"> Item </th>
					<th style="border:3px solid black;"> Optional </th>
					<th style="border:3px solid black;"> Price </th>
					<th style="border:3px solid black;"> Category </th>
					<th style="border:3px solid black;"> Description </th>
					<th style="border:3px solid black;"> Photo </th>
					<th style="border:3px solid black;"> Edit </th>
					<th style="border:3px solid black;"> Delete </th>
				</tr>
			</thead>
			<tbody style="border:3px solid black;">
  				<?php
  					$con=mysqli_connect("localhost", "root", "", "tekweb");
  					$result = mysqli_query($con, "SELECT * FROM menupasto WHERE category = 2;");
  				?>

  				<?php while($pecah = $result->fetch_assoc()) { ?>
  				<tr>
  					<td style="border:3px solid black;"> <?php echo $pecah['id']; ?> </td>
  					<td style="border:3px solid black;"> <?php echo $pecah['item']; ?> </td>
  					<td style="border:3px solid black;"> <?php echo $pecah['optional']; ?> </td>
  					<td style="border:3px solid black;"> <?php echo $pecah['price']; ?> </td>
  					<td style="border:3px solid black;"> <?php echo $pecah['category']; ?> </td>
  					<td style="border:3px solid black;"> <?php echo $pecah['descript']; ?> </td>
  					<td style="border:3px solid black;"> 
						<img src="<?php echo $pecah['photo'] ?>" width="100">  
					</td>

  					<td style="border:3px solid black;"> 
						<!-- icon/svg/si-glyph-pencil.svg <button class="btn btn-sm btn-success"> <img src=icon/svg/si-glyph-pencil.svg width=20 height=20 name="update" ></button> -->
						<a href="editmenu.php?id=<?php echo $pecah['id']; ?>"> <button class="btn btn-sm btn-success"> <img src="edit.png" width=20 height=20></button></a>
					</td style="border:3px solid black;">
						<td style="border:3px solid black;"> 
						<a href="deletemenu.php?id=<?php echo $pecah['id'];?> &category=<?php echo $pecah['category']; ?>" > <button  name = "delete" class="btn btn-sm btn-danger" onClick="return confirm('Are You Sure ?')"> <img src="delete.svg" width=20 height=20> </button> </a>
						</td>
  				</tr>
  				<?php } ?>
  			</tbody>
  		</table>
			</div>	
			<div class="col-md-1"></div>		
		</div>
			<!-- ====================================================================================================================== -->
			



			<!--  ======================================================================================================================= -->
		<div class="col-md-12">
			<div>
				<br>
			</div>

			<div class="row" style="background-color: #f1885b; padding-bottom: 30px; margin-top: 20px;">	
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