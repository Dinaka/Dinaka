<?php
session_start();

$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'project';
$conn = mysqli_connect($host, $user, $pass, $dbname);
if(!$db_on = mysqli_select_db($conn, $dbname)) {
    $error = 'There was an error';
    echo $error;
}

$email ="";
$errors = array();
 




 if (isset($_POST['reg_user'])) {
    $firstname= mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname= mysqli_real_escape_string($conn, $_POST['lastname']);
    $email= mysqli_real_escape_string($conn, $_POST['email']);
    $password= mysqli_real_escape_string($conn, $_POST['password']);
    $confirm_password= mysqli_real_escape_string($conn, $_POST['confirm_password']);
    $tel= mysqli_real_escape_string($conn, $_POST['tel']);
    $gender= mysqli_real_escape_string($conn, $_POST['gender']);
    $country= mysqli_real_escape_string($conn, $_POST['country']);

    if(empty($firstname)) { array_push($errors, "First name is required"); }
    if(empty($lastname)) { array_push($errors, "Last name is required"); }
    if(empty($email)) { array_push($errors, "Email is required"); }
    if(empty($password)) { array_push($errors, "Password is required"); }
    if($password != $confirm_password) {array_push($errors, "The two passwords do not match"); }
    if(empty($tel)) { array_push($errors, "Phone number is required"); }
    if(empty($gender)) { array_push($errors, "Select a gender"); }
    if(empty($country)) { array_push($errors, "Select a country"); }
        


    $user_check_query = "SELECT email FROM users WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        if ($user['email'] === $email) {
            array_push ($errors, "email already exists");
        }
    }

    if (count($errors)==0) {
        $password = md5($password);
        

        $query = "INSERT INTO users (firstname,lastname, email, pass, confirm_password, phone_number, gender, country, created_at) 
            VALUES('$firstname', '$lastname', '$email', '$password', '$confirm_password', '$tel', '$gender', '$country', NOW())";
        if ($conn->query($query) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }
       
        
       $result = mysqli_query($conn, $query);
        $_SESSION['firstname'] = $firstname;
        $_SESSION['success'] = "You are now logged in";
        header('location: login.php');
        
    }
}

/*
$_SESSION['email'] = $email;
            
            echo "You are now logged in";
            header('location: homepage.php');
*/
?>
