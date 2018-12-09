<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'project';
$conn = mysqli_connect($host, $user, $pass, $dbname);
if(!$db_on = mysqli_select_db($conn, $dbname)) {
    echo "connection error";
}
?>
