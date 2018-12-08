<?php
setcookie('email', $email, time()-3600, "/","", 0);
setcookie('password', $password, time()-3600, "/","", 0);
header('Location:signin_cookies.php');
?>

