<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
?>
<html lang = "en">
	<head>
		<title>Hotel Online Reservation</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
	</head>
<body>
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
		<div  class = "container-fluid">
			<div class = "navbar-brand" style="padding-right: 40px; font-weight: bold">
				<p  >Hotel Online Reservation</p>
			</div>
			<ul class = "nav navbar-nav pull-right " style="top: 20px; right: 35px; position: absolute">
				<li class = "dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class = "glyphicon glyphicon-user"></i> <?php echo $name;?></a>
					<ul class="dropdown-menu">
						<li><a href="logout.php"><i class = "glyphicon glyphicon-off"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<div class = "container-fluid">	
		<ul class = "nav nav-pills" style= "margin-left: 40%">
			<li><a href = "home.php">Home</a></li>
			<li class = "active"><a href = "account.php">Accounts</a></li>
			<li><a href = "reserve.php">Reservation</a></li>
			<li><a href = "room.php">Room</a></li>			
		</ul>	
	</div>
	<br />
	<div class="container-fluid">
  <div class="panel panel-default" style = "width:50%; margin-left: auto; margin-right: auto;">
    <div class="panel-body" style="overflow:auto;">
      <div style = "width: 90%;" class="alert alert-info">Account / Create Account</div>
      <br />
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <form method="POST">
            <div class="form-group">
              <label for="name">Name</label>
              <input style="width:80%" type="text" class="form-control" name="name" id="name" />
            </div>
            <div class="form-group">
              <label for="username">Username</label>
              <input style="width:80%" type="text" class="form-control" name="username" id="username" />
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input style="width:80%" type="password" class="form-control" name="password" id="password" />
            </div>
            <br />
            <div class="form-group">
              <button style="width:80%" name="add_account" class="btn btn-info form-control"><i class="glyphicon glyphicon-save"></i> Save</button>
</br>
</br>
<p style = "text-align: center; margin-left: -40px; margin-top: 20px; font-weight: bold;"><a href="index.php">Cancel</a></p>
            </div>
          </form>
          <?php require_once 'add_query_account.php' ?>
        </div>
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
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>
</html>