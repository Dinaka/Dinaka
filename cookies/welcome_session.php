<?php
session_start();
if (isset ($_SESSION['email']) and isset( $_SESSION['password'])){
    header("Location:signin_session.php");
}else{
    echo $_SESSION['email'];
    echo $_SESSION['password'];
  
}

$msg = "Welcome ";
?>

<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php 
    echo $msg
?>
<p>
    To read more click the following link<br />
    <a href = "readmore_session.php">Read more</a> or <a href = "logout_session.php">Log out</a><br>

</p>

</body>
</html>