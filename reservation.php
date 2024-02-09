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
            <?php
            require_once 'admin/connect.php';
            $query = $conn->query("SELECT * FROM `room` ORDER BY `price` ASC") or die(mysql_error());
            while ($fetch = $query->fetch_array()) {
                ?>
                <div class="well" style="padding-right: 10px; height: 350px; width: 100%; display: flex; align-items: center;">
                    <div style="flex: 1; ">
                        <img src="photo/<?php echo $fetch['photo'] ?>" height="250" width="350" style= "margin-left: 15px; border-radius: 15px;" />
                    </div>
                    <div style="flex: 1; margin-left: 10px; ">
                        <h3 style = "font-weight: bold;"><?php echo $fetch['room_type'] ?> Room</h3>
						<br />
                        <h4 style="color:#00ff00;"><?php echo "USD " . $fetch['price'] . ".00" ?></h4>
                        
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <a href="add_reserve.php?room_id=<?php echo $fetch['room_id'] ?>" class="btn btn-info"><i
                                class="glyphicon glyphicon-list"></i> Reserve</a>
                    </div>
                </div>
                <?php
            }
            ?>
			
			<center><img src = "images/logo4.png" width = "400" height = "400" style = "border-radius: 15px;"/></center>
				<br />
				<br />
				<center>
				
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