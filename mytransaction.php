<?php
session_start();
if(empty($_SESSION['nameadmin'])){
	header("location: admin.php");
}
else{	

}	
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
	<script type="jquery-3.3.1.js"></script>
	<link rel="stylesheet" type="text/css" href="navbar.css">
	<link rel="stylesheet" type="text/css" href="socialiconcss.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/bootstrap-select.css">
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
			
	​<?php
	echo '<div class="col-md-12 justify-content-center " >
							
								<table class="table table-hover">
								<thead>
							      <tr>
							      	<th>Time and Date</th>
							        <th>Item</th>
							        <th>Name</th>
							        <th>Sauce</th>
							        <th>Quantity</th>
							        <th>Price</th>
							        <th>Status</th>
							      </tr>
							    </thead>
									<tbody>
									';
	$con=mysqli_connect("localhost", "root", "", "tekweb");
	$cartiduser = 2;
	$resultcart = mysqli_query($con, "SELECT * FROM cartpasto where iduser =  '$cartiduser'");
	$resultmenu = mysqli_query($con, "SELECT * FROM menupasto");

	$total = 0;



	while($row = $resultcart->fetch_assoc()){
		$idmenu = $row['idmenu'];
		$result = mysqli_query($con, "SELECT * FROM menupasto where id = '$idmenu'");
		$row2 = mysqli_fetch_array($result);
		$total += $row2['price']*$row['quantity'];

		if($row['status'] == 0){
			$status = "Waiting";
		}
		elseif($row['status'] == 1){
			$status = "Proccess";
		}
		elseif ($row['status'] == 2) {
			$status = "Delivered";
		}

		echo " <tr> <td>".$row['time']."</td> <td><img src='".$row2['photo']."' width='50px'> </td> <td>".$row2['item']."</td> <td>".$row2['optional']."</td> <td>".$row['quantity']."</td> <td>".$row2['price']*$row['quantity']."</td> <td> ".$status."</td></tr> ";
	}

	echo ' </tbody> </table> ';
	?>
		<div class="col-md-12">
			<a href="home.php"><button type="submit" class="btn btn-primary" name="update" id="update">Back</button></a>
			<br>
		</div>

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