<?php session_start();?>
<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Hotel Online Reservation</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />	
		<link rel = "stylesheet" type = "text/css" href = "css/st.css" />	
	</head>
<body>
	
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default" >
		<div  class = "container-fluid">
			<div class = "navbar-brand" style="padding-right: 40px; font-weight: bold">
				<p  >Hotel Online Reservation</p>
			</div>


			<ul id = "menu">
				<li style="border-radius: 25px;"><a href = "index.php">Home</a></li>
				<li style="border-radius: 25px;"><a href = "aboutus.php">About us</a></li>
				<li style="border-radius: 15px;"><a href = "contactus.php">Contact us</a></li>
				<li style="border-radius: 15px;"><a href = "gallery.php">Gallery</a></li>
				<li style="border-radius: 15px;"><a href = "dineandlounge.php">Dine and Lounge</a></li>	
				<li style="border-radius: 15px;"><a href = "reservation.php">Make a reservation</a></li>
				<li style="border-radius: 15px;"><a href = "rulesandregulation.php">Rules and Regulation</a></li>
				
			</ul>

			<div style="top: 20px; right: 35px; position: absolute">
			<?php
			
			if(isset($_SESSION["login"]) && $_SESSION["login"] === true){
			   echo '<form action="logout.php"><button type="submit" style="margin: 5px; width: 100px;">Log Out</button></form>';
			} else {
			   echo '<form action="login.php"><button type="submit" style="margin: 5px; width: 100px;">Log In</button></form>';
			}
			?>
			</div>

	<div style="margin-left: auto; margin-right: auto; " class="container">
    <div class="panel panel-default">
        <div class="panel-body" style= "margin-right: 30px;">
            <strong><h2 style="text-align: center; padding:10px; padding-right: 100px; padding-bottom: 20px;">MAKE A RESERVATION</h2></strong>
            
				<br />
				<div class = "col-md-4"></div>
				<div class = "well col-md-4">
					<center><h3>Please visit our Hotel for verification</h3></center>
					<br />
					<center><h4>THANK YOU!</h4></center>
					<br />
					<center><a href = "reservation.php" class = "btn btn-success"><i class = "glphyicon glyphicon-check"></i> Back to reservation</a></center>
				</div>
				<div class = "col-md-4"></div>
			</div>
		</div>
	</div>
		</div>
	<br />
	<br />
	<div style = "text-align:right; margin-right:10px;" class = "navbar navbar-default navbar-fixed-bottom">
		<label style="font-size: smaller">&copy; L220302M</label>
	</div>
</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>	
</html>