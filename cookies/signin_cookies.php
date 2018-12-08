<?php

$email = $_POST['email'];
$password = $_POST['password'];

fetchDetails($email, $password);
header("Location:welcome_cookies.php");
setcookie('email', $email, time()+3600, "/","", 0);
setcookie('password', $password, time()+3600, "/","", 0);

function fetchDetails($email, $password){
    $serverName = "localhost";
    $database = "sign-up";
    $username = "root";
    $dbpass = "mysql";

    $conn = mysqli_connect($serverName, $username, $dbpass, $database);
    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }
    if (isset ($_POST['submit'])){

        $query=  "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($result) or die(mysqli_error());
        $_COOKIE['email']=$email;
        $_COOKIE['password']=$password;
        if(!empty($row['email']) and !empty($row['password'])){
            $_COOKIES['email'] = $row['password'];
            

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
</head>
<body>
<form action="" method="post">
    <div>
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