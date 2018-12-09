<?php
require('connection.php');
include('server.php');

if(isset($_POST['Update'])) {
$id=$_REQUEST['id'];
$query = "SELECT id FROM note_table WHERE id='".$id."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Update Note</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="note_style.css" />
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="webpage_validation.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" 
    integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
</head>
<body>
<div class="jumbotron">
<div class="form">
<p><a href="homepage.php">Home</a> 
<a href="logout.php" style="color:red; float:right; font-size: 25px; font-family: fantasy;">Logout</a></p>

<a href="insert.php" style="padding-right: 76px;">Insert New Record</a> 
<br><br>
<h1>Update Record</h1><br>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$created_at = date("Y-m-d");
$content =$_REQUEST['content'];


$update="UPDATE note_table SET created_at='".$created_at."',
content='".$content."' WHERE id='".$id."'";
mysqli_query($conn, $update) or die(mysqli_error());
$status = "Note Updated Successfully. </br></br>
<a href='view.php'>View Updated Note</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
    <form name="form" method="post" action=""> 
        <input type="hidden" name="new" value="1" />
        <input name="id" type="hidden" value="<?php echo $row['id'];?>" />
        <input type="email" name="email" class="email" placeholder="Your email...">
        <br>
        <textarea rows="15" cols="100" name="content" class="content" placeholder="Your note..." required></textarea>
        <br><br>
        <input type="submit" name="submit" class="submit" value="Update">
    </form>
<?php } ?>
</div>
</div>
</div>


    <script src="jquery-3.3.1.min.js"></script>
    <script src="popper.min.js"></script>
    <script src="bootstrap.min.js"></script>
    
</body>
</html>