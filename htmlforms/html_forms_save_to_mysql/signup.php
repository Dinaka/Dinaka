<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$tel = $_POST['tel'];
$gender = $_POST['gender'];
$country = $_POST['country'];
saveToFile($firstname, $lastname, $email, $password, $confirm_password, $tel, $gender, $country);
saveToDatabase($firstname, $lastname, $email, $password, $confirm_password, $tel, $gender, $country);
header('Location:success.html');

function saveToFile($firstname, $lastname, $email, $password, $confirm_password, $tel, $gender, $country){
    $fileHandler = fopen('record.txt','a');
    $string = $firstname .',' . $lastname .',' . $email .',' . $password .',' . $confirm_password .',' . $tel .',' . $gender .',' . $country ."\n";
    fwrite($fileHandler, $string);
    fclose($fileHandler);
}

function saveToDatabase($firstname, $lastname, $email, $password, $confirm_password, $tel, $gender, $country){
    $serverName = "localhost";
    $database = "sign-up";
    $username = "root";
    $dbpass = "mysql";

    $conn = mysqli_connect($serverName, $username, $dbpass, $database);
    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "INSERT INTO users (firstname, lastname, email, password, confirm_password, tel, gender, country, created_at)
        VALUES ('$firstname', '$lastname', '$email', '$password', '$confirm_password', '$tel', '$gender', '$country', NOW())";
    $result = mysqli_query ($conn, $sql);

    if(!$result){
        die("Error: " . $sql. "<br>" . mysqli_error($conn));
    }
    mysqli_close($conn);
}
?> 