<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];
fetchDetails($email, $password);
header("Location:welcome_session.php");


function fetchDetails($email, $password){
    $serverName = "localhost";
    $database = "sign-up";
    $username = "root";
    $dbpass = "mysql";

    $conn = mysqli_connect($serverName, $username, $dbpass, $database);
    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }
    if (isset ($_POST['login'])){

        $query=  "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        
        $result = mysqli_query($conn,$query);
        
        $row = mysqli_fetch_assoc($result) or die(mysqli_error());
        $_SESSION['email']=$email;
        $_SESSION['password']=$password;
       
        if(!empty($row['email']) and !empty($row['password'])){
            $_SESSION['email'] = $row['password'];
             

        }else {
            echo "Invalid Email and Password";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page </title>
    <link href="signin_style.css" rel="stylesheet">
</head>
<body>
<form action="" method="post">
    <div class="label">
        <label for="email">E-mail</label><br>
            <input type="text" name="email" id="email" placeholder="JohnMark@email.com..."><br>

        <label for="password">Password</label><br>
            <input type="password" name="password" id="password" placeholder="Enter password..."><br>
            
    </div>

    <div>
        <input type="submit" name="login" value="Login">
        <input type="reset" name="cancel" value="Cancel">
        
    </div>
</form>
</body>
</html>