<?php

require('connection.php');
$status = "";
if(isset($_POST['Submit'])){
    $created_at= date('Y-m-d');
    $content =$_REQUEST['content'];
    $email = $_POST['email'];
   
    
    $ins_query="INSERT into note_table VALUES(null, '$content', '$email', NOW())";
    
    if($query_run = mysqli_query($conn, $ins_query)) {
        echo "New note added successfully";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add New Note</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="note_style.css" />
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="webpage_validation.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" 
    integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
</head>
<body>
    <div class="jumbotron" style="background-color: opaque;">
    <div class="form">
    <p><a href="homepage.php">Home</a> 
    <a href="logout.php" style="color:red; float:right; font-size: 25px; font-family: fantasy;" >Logout</a></p>
    <br> <a href="view.php" style="padding-right: 85px;">View Records</a> 
     
    <div>
    <br>
    <h1>Insert New Record</h1>
    <form name="form" method="post" action=""> 
    <!-- <input type="hidden" name="new" value="1" /> -->
    <input type="email" name="email" class="email" placeholder="Your email...">
    <br>
    <textarea rows="15" cols="100" name="content" class="content" placeholder="Your note..." required></textarea>
    <br><br>
    <input type="submit" name="submit" class="submit" value="Submit">
    <p style="color:#FF0000;"><?php echo $status; ?></p>
    </form>
    </div>
    </div>
    </div>
    


    
    <script src="jquery-3.3.1.min.js"></script>
    <script src="popper.min.js"></script>
    <script src="bootstrap.min.js"></script>
    
</body>
</html>