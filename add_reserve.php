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

		<div style="margin-left: auto; margin-right: auto;" class="container">
  <div class="panel panel-default">
    <div class="panel-body" style= "margin-right: 30px;">

      <strong><h2>MAKE A RESERVATION</h2></strong>
      <br />
      <?php 
        require_once 'admin/connect.php';
        $query = $conn->query("SELECT * FROM `room` WHERE `room_id` = '$_REQUEST[room_id]'") or die(mysql_error());
        $fetch = $query->fetch_array();
      ?>
      <div style="display: flex;">
  <div style="float: left; margin-top: 10%;">
    <img src="photo/<?php echo $fetch['photo']?>" height="300px" width="400px">
	<h3 style = "font-weight: bold; margin-left: 100px;"><?php echo $fetch['room_type']?> Room</h3>
    <h3 style="margin-left: 100px; color: #00ff00;"><?php echo "USD ".$fetch['price'].".00";?></h3>
  </div>
  <?php
			
			if(isset($_SESSION["login"]) && $_SESSION["login"] === true){
			   // If the user is logged in, retrieve their attributes and display a form to input the check-in date
        $guest_id= $_SESSION["guest_id"];
			   echo '<div style="float: right; margin-left: 150px; margin-top: 10px;">
         <div class="well col-md-20" style="margin-top: 150px">
           <form method="POST" enctype="multipart/form-data">
               <label>Check in</label>
               <input type="date" class="form-control" name="date" required="required" style="width: 100%;" />
             </div>
             <br />
             <div class="form-group">
               <button class="btn btn-info form-control" name="add_guest"><i class="glyphicon glyphicon-save"></i> Submit</button>
             </div>
         <p style = "font-weight: bold; text-align: center;"><a href="reservation.php">Cancel</a></p>
           </form>
         </div>
       </div>
					<input type="hidden" name="room_id" value="'.$_REQUEST['room_id'].'" />
					
					
          </form>';
          }else{
          // If the user is not logged in, display a login and sign up button
          echo '<<div style="float: right; margin-left: 150px; margin-top: 10px;">
         <div class="well col-md-20" style="margin-top: 150px">
          
             <br />
             <div class="form-group">
             <p style = "font-weight: bold; text-align: center;">In order to reserve your room, make sure to log in using your account :) </p>
               <button class="btn btn-info form-control" name="add_guest" onclick="location.href=\'login.php\'"><i class="glyphicon glyphicon-save"></i> Login</button>
             </div>
             <p style = "font-weight: bold; text-align: center;">Dont have an account? Sign up here</p>
         <p style = "font-weight: bold; text-align: center;"><a href="signup.php">Sign Up</a></p>
           
         </div>
       </div>
				
					
          </form>';
          }
          ?>
  
      
 

      <br style="clear: both;" />
      <div class="col-md-4"></div>
      <?php require_once 'add_query_reserve.php'?>
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