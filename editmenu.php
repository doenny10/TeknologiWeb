<?php
session_start();
if(empty($_SESSION['nameadmin'])){
	header("location: admin.php");
}
else{	
		$con=mysqli_connect("localhost", "root", "", "tekweb");
		$var_id = $_GET["id"];
		$result = mysqli_query($con, "SELECT * FROM menupasto");
		while($row = mysqli_fetch_array($result)){
			if($row['id'] == $var_id){
				$var_item = $row['item'];
				$var_optional = $row['optional'];
				$var_price = $row['price'];
				$var_category = $row['category'];
				$var_description = $row['descript'];
				$var_photo = $row['photo'];
				$true = true;
				break;
			}
		}
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


	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">

	<!-- Latest compiled and minified JavaScript -->
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
				<div class="row">
					<div class="col-md-4">
				</div>

				<div class="col-md-4">
					<form action="database.php" method="POST">
					<div class="form-row">
						<h1>Edit Database Menu</h1>
					</div> 
		  			
					<div class="form-group">
		    			<label for="labelNama">ID</label>
		    			<input type="text" class="form-control" id="id" name = "id" placeholder="ID" value="<?php echo $var_id?>" readonly >
		  			</div>

		  			<div class="form-group">
		    			<label for="labelNama">Item</label>
		    			<input type="text" class="form-control" id="item" name = "item" placeholder="Item" value="<?php echo $var_item?>">
		  			</div>

					<div class="form-group">
		    			<label for="labelAlamat">Optional</label>
		    			<input type="text" class="form-control" id="optional" name = "optional" placeholder="Optional" value="<?php echo $var_optional?>" >
		  			</div>

		  			<div class="form-group">
		    			<label for="labelEmail">Price</label>
		    			<input type="text" class="form-control" id="price" name = "price" placeholder="Price" value="<?php echo $var_price?>">
		  			</div>

		  			<div class="form-group">
		    			<label for="labelEmail">Category</label>
		    			<input type="text" class="form-control" id="category" name = "category" placeholder="Category" value="<?php echo $var_category?>">
		  			</div>
		  		
		  			<div class="form-group">
		    			<label for="labelEmail">Description</label>
		    			<input type="text" style="width:470px; height:150px;" rows="5" cols="40"  class="form-control" id="description" name = "description" placeholder="Description" value="<?php echo $var_description?>">
		  			</div>

		  			<div class="form-group">
		    			<label for="labelEmail">Photo</label>
		    			<input type="text" class="form-control" id="photo" name = "photo" placeholder="Photo" value="<?php echo $var_photo?>">
		  			</div>
		    		<button type="submit" class="btn btn-primary" name="editmenu" id="editmenu">Save</button>
		  		</div>		  		
		  		
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