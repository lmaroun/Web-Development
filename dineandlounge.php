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
		</div>

		
		<div style="margin-left: auto; margin-right: auto; " class="container">
    <div class="panel panel-default">
        <div class="panel-body" style= "background-color: aliceblue"">
				<strong><h2 style="text-align: center; padding:10px; padding-right: 100px; padding-bottom: 20px;">DINE AND LOUNGE</h2></strong>
				<br />
				<br />
				
				<div style="display: flex; flex-wrap: wrap; justify-content: flex-start;">
                <div style="width: 250px; height: 250px; margin: 10px; border-radius: 5px; overflow: hidden;">
                    <img src="images/dine/1.jpg" width="250" height="250" />
                </div>

				<div style="width: 250px; height: 250px; margin: 10px; border-radius: 5px; overflow: hidden;">
					<img src = "images/dine/2.jpg" width = "250" height = "250"/>
				</div>
				<div style="width: 250px; height: 250px; margin: 10px; border-radius: 5px; overflow: hidden;">
					<img src = "images/dine/3.jpg" width = "250" height = "250"/>
				</div>
				<div style="width: 250px; height: 250px; margin: 10px; border-radius: 5px; overflow: hidden;">
					<img src = "images/dine/4.jpg" width = "250" height = "250"/>
				</div>
				<br style = "clear:both;" />
				<br />
				<div style="width: 250px; height: 250px; margin: 10px; border-radius: 5px; overflow: hidden;">
					<img src = "images/dine/5.jpg" width = "250" height = "250"/>
				</div>
				<div style="width: 250px; height: 250px; margin: 10px; border-radius: 5px; overflow: hidden;">
					<img src = "images/dine/6.jpg" width = "250" height = "250"/>
				</div>
				<div style="width: 250px; height: 250px; margin: 10px; border-radius: 5px; overflow: hidden;">
					<img src = "images/dine/7.jpg" width = "250" height = "250"/>
				</div>
				<div style="width: 250px; height: 250px; margin: 10px; border-radius: 5px; overflow: hidden;">
					<img src = "images/dine/8.jpg" width = "250" height = "250"/>
				</div>
				<br style = "clear:both;" />
				<br />
				<div style="width: 250px; height: 250px; margin: 10px; border-radius: 5px; overflow: hidden;">
					<img src = "images/dine/9.jpg" width = "250" height = "250"/>
				</div>
				<div style="width: 250px; height: 250px; margin: 10px; border-radius: 5px; overflow: hidden;">
					<img src = "images/dine/10.jpg" width = "250" height = "250"/>
				</div>
				<div style="width: 250px; height: 250px; margin: 10px; border-radius: 5px; overflow: hidden;">
					<img src = "images/dine/11.jpg" width = "250" height = "250"/>
				</div>
				<div style="width: 250px; height: 250px; margin: 10px; border-radius: 5px; overflow: hidden;">
					<img src = "images/dine/12.jpg" width = "250" height = "250"/>
				</div>
			</div>
		</div>
	</div>
	<br />
	<br />
	<div style = "text-align:right; margin-right:10px; height:20px;" >
		<label style="font-size: smaller;">&copy; L220302M</label>
	</div>
</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>	
</html>