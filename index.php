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
<body >
	
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default" >
		<div  class = "container-fluid">
			<div class = "navbar-brand" style="padding-right: 40px; font-weight: bold">
				<p>Hotel Online Reservation</p>
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
		</div>


	
	<p style = " font-size:40px; text-align: center;  padding-top: 20px; font-weight: bold; color: #23527c; "> Welcome to </p>
	<img style="display: block; margin: 0 auto" src="images\logo4.png">
		

	<div id="myCarousel" class="carousel slide container-fluid" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
			<li data-target="#myCarousel" data-slide-to="4"></li>
			<li data-target="#myCarousel" data-slide-to="5"></li>
			<li data-target="#myCarousel" data-slide-to="6"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="images/a.jpg" style = "display: block; margin: 0 auto; height:550px; width:75%; border-radius: 15px;" />
			</div>
		
			<div class="item">
				<img src="images/b.jpg" style = "display: block; margin-left: 250px; height:550px; width:75%; border-radius: 15px;"  />
			</div>
		
			<div class="item">
				<img src="images/c.jpg" style = "display: block; margin-left: 250px; height:550px; width:75%; border-radius: 15px; " />
			</div>
		
			<div class="item">
				<img src="images/d.jpg" style = "display: block; margin-left: 250px; height:550px; width:75%; border-radius: 15px; " />
			</div>
			
			<div class="item">
				<img src="images/e.jpg" style = "display: block; margin-left: 250px; height:550px; width:75%; border-radius: 15px; " />
			</div>
			
			<div class="item">
				<img src="images/f.jpeg" style = "display: block; margin-left: 250px; height:550px; width:75%; border-radius: 15px; " />
			</div>
			
			<div class="item">
				<img src="images/g.png" style = "display: block; margin-left: 250px; height:550px; width:75%; border-radius: 15px; " />
			</div>
			
			
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>	
	</div>

		
	<br />
	<br />

	</nav>
	<div style = "text-align:right; margin-right:10px; height:20px;" >
		<label style="font-size: smaller;">&copy; L220302M</label>
	</div>
</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>	
</html>