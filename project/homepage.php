<?php
session_start();

$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'project';
$conn = mysqli_connect($host, $user, $pass, $dbname);

/*
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: login.php");
}
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My Notepad/homepage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="webpage_validation.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" 
    integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
</head>
<body style="background-color: rgb(146, 143, 143)">
    <br><br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="jumbotron" style="background-color:yellowgreen;">
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-4">
                            <h1 class="display-4 text-center">Welcome!</h1>
                        </div>
                    </div>
                
                    <div class="row">
                        <div class="col-4"></div>
                        <div class="col-5">
                            <p class="text-center">What are your thoughts today?</p>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-5">
                            <a href ="insert.php" class ="btn btn-warning btn-lg">Create New Note</a>
                        </div>
                        <div class="col-5">
                            <a href ="view.php" class ="btn btn-info btn-lg">View Notes</a>
                        </div>
                    
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-5"></div>
                        <div class="col-5">
                            <a href ="log_out.php" class ="btn btn-danger btn-lg">Log out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script src="jquery-3.3.1.min.js"></script>
    <script src="popper.min.js"></script>
    <script src="bootstrap.min.js"></script>
    
</body>
</html>