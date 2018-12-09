<?php
require('connection.php');
include('server.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>View Notes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="note_style.css" />
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="webpage_validation.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" 
    integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
</head>
<body style="background-color: rgb(224, 219, 219);">
    <div class="jumbotron" style="background-color: rgb(224, 219, 219);">
    <div class="form">
    <p><a href="homepage.php">Home</a>
    <a href="logout.php" style="color:red; float:right; font-size: 25px; font-family: fantasy;">Logout</a></p> 
     <a href="insert.php" style="padding-right: 76px;">Insert New Note</a> 
     <br><br><br>
    <h2>View Notes</h2>
    <table class="table">
    <thead style="background-color: whitesmoke;">
        <tr>
        <th scope="col">S No.</th>
        <th scope="col">Notes</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody style="background-color: rgb(247, 218, 93);">
        <?php
        
        $sel_query="SELECT * FROM note_table ORDER BY id DESC";
        $result = mysqli_query($conn,$sel_query);
        while($row = mysqli_fetch_assoc($result)) { $count=1;?>
        
        <tr><th scope="row"><?php echo $count; ?></th>
        <td><?php echo $row["note"]; ?></td>

        <td>
        <a href="edit.php?id=<?php echo $row["id"]; ?>" style="font-size: 25px; color:green;">Edit</a>
        </td>
        <td>
        <a href="delete.php?id=<?php echo $row["id"]; ?>" style="font-size: 25px; color:rgb(124, 4, 4);">Delete</a>
        </td>
        </tr>
        <?php $count++; } ?>
    </tbody>
    </table>
    </div>
    </div>


    
    <script src="jquery-3.3.1.min.js"></script>
    <script src="popper.min.js"></script>
    <script src="bootstrap.min.js"></script>
    
</body>
</html>