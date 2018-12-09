<?php 
require('server.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registration Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class="header">
        <h2>REGISTER</h2>
    </div>

    <form method="POST" action="register.php">
        <?php include('errors.php'); ?>
        <div class="input-group">
            <label>First name</label>
            <input type="text" name="firstname">
        </div>
        
        <div class="input-group">
            <label>Last name</label>
            <input type="text" name="lastname">
        </div>
        
        <div class="input-group">
            <label>Email</label>
            <input type="text" name="email" value="<?php echo $email; ?>">
        </div>
        
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password">
        </div>
        
        <div class="input-group">
            <label>Confirm password</label>
            <input type="password" name="confirm_password" >
        </div>
        
        <div class="input-group">
            <label>Phone number</label>
            <input type="tel" name="tel" >
        </div>

        <div class="input-group">
            <label for="gender">Gender:</label><br>
                <input class="container" type="radio" name="gender" value="male">Male<br>
                    
                <input class="container" type="radio" name="gender" value="female"checked >Female<br>
                    
                <input class="container" type="radio" name="gender" value="other">Other<br>
        </div>       

        <div class="input-group">
            <label for="country">Country:</label><br>
            <select name="country">
                <option value="0">Choose Country</option>
                <option value="nigeria">Nigeria</option>
                <option value="US">United States</option>
                <option value="canada">Canada</option>
                <option value="australia">Australia</option>
                <option value="malawi">Malawi</option>
                <option value="germany">Germany</option>
                <option value="united kingdom">United Kingdom</option>
                <option value="ghana">Ghana</option>
            </select>

        <div class="input-group">
            <button type="submit" class="btn" name="reg_user">Register</button>
        </div>
        <p>
            Already a member? <a href="login.php">Sign in</a>
        </p>
    </form>
    
</body>
</html>