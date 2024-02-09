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
        <div class="panel-body" style= "background-color: aliceblue">
				<strong><h2 style="text-align: center; padding:10px; padding-right: 100px; padding-bottom: 20px;">ABOUT US</h2></strong>
				<p style = "font-family: sans-serif; font-weight: bold; font-size: large; color: #23527c; text-align: center; position:relative; float:left; width:850px;">Welcome to Sunset Oasis, a luxurious hotel nestled in the heart of Beirut, Lebanon. Our hotel is located in one of the most vibrant and lively cities in the Middle East, offering our guests a unique blend of modern comfort and traditional charm.

At Sunset Oasis, we pride ourselves on providing our guests with the very best in hospitality and service. Whether you're here for business or pleasure, our dedicated staff is here to ensure that your every need is met. From the moment you step through our doors, you'll be enveloped in an atmosphere of warmth and elegance that is unmatched in the city.

Our hotel offers a wide range of services and amenities to make your stay with us as comfortable and enjoyable as possible. Our beautifully-appointed rooms and suites are designed with your comfort in mind, featuring plush bedding, modern furnishings, and stunning views of the city. We also offer a full-service spa, fitness center, and rooftop pool, as well as a variety of dining options to suit any palate.

Whether you're here to explore the vibrant culture of Beirut or simply to relax and unwind, Sunset Oasis is the perfect destination. So why not book your stay with us today and experience the very best that our hotel has to offer?
Thank you for considering us for your next stay. We look forward to welcoming you soon.
The Hotel lifestyle offers guests the finest sensory indulgences: soothing organic toiletries, heirloom recipes, and unmatched privacy and tranquility</p>
				<img style=" display:block; margin:0 auto; padding-top: 20px;" src = "images/logo4.png" />
				<br style = "clear:both;" />
				<br />
				<br />
				<hr style = "border:1px dotted #000;" />
				<br />
				<div style = "float:left; margin-left:40px; width:300px; height:300px; ">
					<img src = "images/1.jpg" width = "250px" height = "250px"  style = "margin-top:5px;"/>
					<h4 style = "color:rgba(0, 255, 0, 1);">Standard</h4>
					<label>Small Size Bed</label> <label style = "color:red;">USD 2,000.00</label>
				</div>

				<div style = "float:left; margin-left:40px; width:300px; height:300px; ">
					<img src = "images/2.jpg" width = "250px" height = "250px"  style = "margin-top:5px;"/>
					<h4 style = "color:rgba(0, 255, 0, 1);">Extra Bed</h4>
					<label style = "color:red;">USD 800.00</label>
				</div>

				<div style = "float:left; margin-left:40px; width:300px; height:300px; ">
					<img src = "images/3.jpg" width = "250px" height = "250px"  style = "margin-top:100px;"/>
					<h4 style = "color:rgba(0, 255, 0, 1);">Superior</h4>
					<label>1 Medium Size Bed</label> <label style = "color:red;">USD 2,400.00 </label>
				</div>


				<div style = "float:left; margin-left:40px; width:300px; height:300px; ">
					<img src = "images/4.jpg" width = "250px" height = "250px"  style = "margin-top:100px;"/>
					<h4 style = "color:rgba(0, 255, 0, 1);">Super Deluxe</h4>
					<label>2 Medium Size Bed</label> <label style = "color:red;">USD 2,800.00 </label>
				</div>
				<div style = "float:left; margin-left:40px; width:300px; height:300px; ">
					<img src = "images/5.jpg" width = "250px" height = "250px"  style = "margin-top:200px;"/>
					<h4 style = "color:rgba(0, 255, 0, 1);">Jr. Suite</h4>
					<label>Matrimonial</label> <label style = "color:red;">USD 3,800.00 </label>
				</div>
				<div style = "float:left; margin-left:40px; width:300px; height:300px; ">
					<img src = "images/6.jpg" width = "250px" height = "250px"  style = "margin-top:200px;"/>
					<h4 style = "color:rgba(0, 255, 0, 1);">Executive Suite</h4>
					<label>Matrimonial</label> <label style = "color:red;">USD 4,000.00 </label>
				</div>
				<br style = "clear:both;"/>
				<br />
				<br />
				<strong><h3 style= "font-family: sans-serif; font-weight: bold;  color: #23527c;margin-top: 250px; text-align:center;">Amenities and Services</h3></strong>
				<ul style="margin-top:50px; font-family: sans-serif; font-weight: bold; font-size: large; color: #23527c;">
					<li style="position:absolute; "><label>24 Hour room service</label></li><br />
					<li style="position:absolute; "><label>21" Flat screen TV with cable service</label></li><br />
					<li style="position:absolute; "><label>Hot & cold shower</label></li><br />
					<li style="position:absolute; "><label>Refrigerator and mini bar on demand in all suites and superior rooms</label></li><br />
					<li style="position:absolute;"><label>Coffee & tea set, bottled water, organic tolletries in suites and superior rooms</label></li><br />
					<li style="position:absolute; "><label>Hair dryer in suite rooms</label></li><br />
					<li style="position:absolute; "><label>Personal safety boxes in every room</label></li><br />
					<li style="position:absolute; "><label>Laundry & pressing</label></li><br />
					<li style="position:absolute; "><label>Free use Wifi</label></li><br />
					<li style="position:absolute; "><label>In room massage services</label></li><br />
					<li style="position:absolute; "><label>Personal Safe in Every Room</label></li><br />
					<li style="position:absolute; "><label>Mini Bar</label></li><br />
					<li style="position:absolute; "><label>7 Function & Meeting Rooms</label></li><br />
					<li style="position:absolute; "><label>Road Trip Airport Transfers & Special City Tour</label></li><br />
					<li style="position:absolute; "><label>Swimming Pool</label></li><br />
					<li style="position:absolute; "><label>Gift Shop</label></li><br />
					<li style="position:absolute; "><label>Business Center</label></li><br />
					<li style="position:absolute; "><label>Free Parking for Guest</label></li><br />
				</ul>
			</div>
		</div>
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