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
				<strong><h2>CONTACT US</h2></strong>
				<br />
				<br />
				<h3>Get In Touch</h3>
      <p style="font-family: Roboto, sans-serif;
    font-size:15px;  padding-top: 20px; font-weight: bold;">Feel free to reach out to us with any questions or inquiries you may have. We would love to hear from you!</p>
				<h3>Contact Information</h3>
      <ul style="font-size: large; font-family: Roboto, sans-serif">
        <li>Address: Sunset Oasis, Beirut, Lebanon</li><br>
        <li>Phone: +961-1-234567</li><br>
        <li>Email: info@sunsetoasis.com</li><br>
      </ul>
	  <h3>Follow Us</h3>
      <ul class="social-links">
	    <li><a href="https://facebook.com/sunsetoasis"><img src="images/fb.png" alt="Facebook"> https://facebook.com/sunsetoasis </a></li><br><br><br><br>
        <li><a href="https://twitter.com/sunsetoasis"><img src="images/tw.png" alt="Twitter"> https://twitter.com/sunsetoasis</a></li><br><br><br><br>
        <li><a href="https://www.instagram.com/sunsetoasis"><img src="images/ig.png" alt="Instagram"> https://www.instagram.com/sunsetoasis</a></li><br><br><br><br>
        <li><a href="https://www.linkedin.com/company/sunsetoasis"><img src="images/li.png" alt="LinkedIn"> https://www.linkedin.com/company/sunsetoasis</a></li><br><br><br><br>
        <li><a href="https://www.youtube.com/channel/UC123456"><img src="images/yt.png" alt="YouTube"> https://www.youtube.com/channel/UC123456</a></li><br><br><br><br>
      </ul>
	  <h2>Map and Directions</h2>
      <iframe style="width:90%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d167604.34386731683!2d35.46843785437167!3d33.88862801724706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15217c0813bf7d13%3A0xf862e2d3d2dd74e4!2sBeirut%2C%20Lebanon!5e0!3m2!1sen!2sus!4v1620667207194!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>
    
    
  </main>
  
  <footer>
    <p>&copy; 2023 Sunset Oasis. All Rights Reserved.</p>
  </footer>

				<center><img src = "images/logo4.png" width = "400" height = "400" style = "border-radius: 15px;"/></center>
				<br />
				<br />
				<center>
				<h4 style = "font-weight: bold;">Contact No: +961-1-234567</h4>
				<h4 style = "font-weight: bold;">Email: info@sunsetoasis.com</h4>
				</center>
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