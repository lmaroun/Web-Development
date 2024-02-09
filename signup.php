
<!DOCTYPE html>
<html>
<link rel = "stylesheet" type = "text/css" href = "css/st.css" />
<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
<head>
  <title>Sign Up</title>
</head>
<body class="sign" style="background-image: url(images/5.jpg);
    background-size: cover;
    background-position: center;">
  
  <div class="container">
    <h1>Sign Up</h1>
    <form class="" action="" method="post" autocomplete="off">

      <label for="firstname">First Name:</label>
      <input type="text" name="firstname" required class = "inputbox">

</br>

      <label for="lastname">Last Name:</label>
      <input type="text" name="lastname" required class = "inputbox">
      </br>
      <label for="contactno">Contact Number:</label>
      <input type="number" name="contactno" required class = "inputbox">

      </br>



      <label for="username">Username:</label>
      <input type="text" name="username" required autocomplete="off" class = "inputbox">
      </br>
      <label for="email">Email:</label>
      <input type="email" name="email" required class = "inputbox">
      </br>
      <label for="password">Password:</label>
      <input type="password" name="password" required class = "inputbox">
      </br>

      <label for="confirm_password">Confirm Password:</label>
      <input type="password" name="confirm_password" required class = "inputbox">


      <button type="submit" name="submit" style="border: 2px ;
    font-size: 16px;
    padding: 10px;
    width: 20%;
    margin-bottom: 20px;">Sign Up</button >

    </form>

    <p style = "text-align: center;  font-weight: bold">Already have an account? <a href="login.php" style="color:white">Login here</a>.</p>
    <p style = "text-align: center;"><a href="index.php" style="color:white">Homepage</a></p>
  </div>

  <div style = "text-align:right; margin-right:10px; height:20px;" >
		<label style="font-size: smaller;">&copy; L220302M</label>
	</div>

</body>
</html>

<?php
require 'admin/connect.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){

  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $contactno=$_POST["contactno"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirm_password"];
  $duplicate = mysqli_query($conn, "SELECT * FROM guest WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo "<script>alert('Username or Email already taken. Please try again.');</script>";
    echo "<script>window.location.href='signup.php';</script>";
    exit();
    
  }
  else{
    if($password == $confirmpassword){
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

      $query = "INSERT INTO guest VALUES('','$firstname','$lastname','$username','$email','$hashed_password','$contactno')";
      mysqli_query($conn, $query);
      echo "<script>alert('Registration Succesful. You can now Log in.');</script>";
      echo "<script>window.location.href='login.php';</script>";
      exit();
    }
    else{
        echo "<script>alert('Password does not match. Please try again.');</script>";
        echo "<script>window.location.href='signup.php';</script>";
    }
  }
}
?>