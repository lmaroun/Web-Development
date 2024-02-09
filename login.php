<?php session_start();?>
<!DOCTYPE html>
<html>
<link rel = "stylesheet" type = "text/css" href = "css/st.css" />
<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
<head>
    <title>Login</title>
    
</head>
<body  style=" display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
        background-image: url(images/1.jpg);
    background-size: cover;
    background-position: center;
        " >
    <div class="container">
        <h1>Login</h1>
        <form action="" method="post" autocomplete="off" >

            <label for="username">Username:</label >
            <input type="text" name="username" required class = "inputbox">

            <label for="password">Password:</label>
            <input type="password" name="password" required class = "inputbox">

    <label for="admin-toggle" style="font-weight: bold">I am an admin:</label>

  <input type="checkbox" id="admin-toggle" name="admin-toggle">
  <div id="admin-key-field" style="display: none;">
    <label for="admin-key">Admin Key:</label>
    <input type="password" id="admin-key" name="admin-key" style="margin: 10px; width: 30%">
  </div>

            
  
  <button type="submit" name="submit" style="border: 2px ;
    font-size: 16px;
    padding: 10px;
    width: 20%;
    margin-bottom: 20px;">Login</button>

        </form>
        <p style = "text-align: center;font-weight: bold;font-size: large">Don't have an account? <br><br><a href="signup.php" style="color: #23527c">Sign up here</a>.</p>
        <p style = "text-align: center;"><a href="index.php" style="font-weight: bolder; ">Homepage</a></p>
    </div>
    <script>
    const adminToggle = document.querySelector('#admin-toggle');
    const adminKeyField = document.querySelector('#admin-key-field');

    adminToggle.addEventListener('change', () => {
      if (adminToggle.checked) {
        adminKeyField.style.display = 'block';
      } else {
        adminKeyField.style.display = 'none';
      }
    });
  </script>
  
</body>
</html>
<?php



require 'admin/connect.php';

if(!empty($_SESSION["id"])){
    header("Location: index.php");
  }
  if (isset($_POST['admin-toggle']) && $_POST['admin-toggle'] == 'on') {
    $adminKey = $_POST['admin-key'];
    $username = $_POST['username'];  
    $password= $_POST['password'];
    $result =mysqli_query($conn, "SELECT admin_id, username, password FROM admin WHERE username = '$username' && admin_id='$adminKey'");
    $row=mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result)>0){
        if ($password== $row['password']){
            $_SESSION["login"]=true;
            $_SESSION["admin_id"]=$row["admin_id"];
            header("Location: admin/home.php");
        }
    
    
         else {
            echo "<script>alert('Invalid password. Please try again.');</script>";
echo "<script>window.location.href='login.php';</script>";
exit();

           
        }
    }
     else {
        echo "<script>alert('Invalid username or admin Key. Please try again.');</script>";
echo "<script>window.location.href='login.php';</script>";
exit();

}
  }
else{
if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $result =mysqli_query($conn, "SELECT guest_id, username, password FROM guest WHERE username = '$username'");
    $row=mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result)>0){
      $hashedPassword=$row['password'];
        if (password_verify($password,$hashedPassword)){
            $_SESSION["login"]=true;
            $_SESSION["guest_id"]=$row["guest_id"];
            header("Location: index.php");
        }
    
    
         else {
            echo "<script>alert('Invalid password. Please try again.');</script>";
echo "<script>window.location.href='login.php';</script>";
exit();

           
        }
    }
     else {
        echo "<script>alert('Invalid username. Please try again.');</script>";
echo "<script>window.location.href='login.php';</script>";
exit();
        
    }
}
}
 
?>