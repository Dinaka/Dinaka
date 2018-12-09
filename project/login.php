<?php 
require('server.php');

$errors = array();

if (isset($_POST['login_user'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
     $password = mysqli_real_escape_string($conn, $_POST['password']);
 
     if (empty($email)) {
         array_push($errors, "Email is required");
     }
     if (empty($password)) {
         array_push($errors, "Password is required");
     }
 
     if (count($errors) == 0) {
         $password = md5($password);
         $query = "SELECT email, pass FROM users WHERE email='".$email."' AND pass ='".$password."'";
         
         if ($result = mysqli_query($conn, $query)) {
             while ($row=mysqli_fetch_assoc($result)) {
                 $email2 = $row['email'];
                 $_SESSION['login'] = $email2;
                 header('location: homepage.php');
             }
         }else {
             array_push($errors, "Wrong email/password combination");
         }
     }
 }
 
 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class="header">
        <h2>LOGIN</h2>
    </div>

    <form method="POST" action="">
        <?php include('errors.php'); ?>
        <div class="input-group">
            <label>Email</label>
            <input type="text" name="email">
        </div>

        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password">
        </div>

        <div class="input-group">
            <button type="submit" class="btn" name="login_user">Login</button>
        </div>
        <p>
            Not yet a member? <a href="register.php">Sign up</a>
        </p>
    </form>
    
</body>
</html>