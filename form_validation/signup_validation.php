<?php
$message = '';
if (isset($_POST['submit'])) {
    var_dump($_POST);exit;
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];
    $tel = $_POST['tel'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    if (empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($confirm_password) || empty($tel) || empty($gender) || empty($country)) {
    $message = '<p class="error">All fields are required</p>';
    }

    if (strlen($firstName) < 3 || strlen($firstName) > 25) {
        $message .= '<p class="error">First name must be between 3 and 25 characters</p>';
    }

    if (strlen($lastName) < 3 || strlen($lastName) > 25) {
        $message .= '<p class="error">Last name must be between 3 and 25 characters</p>';
    }

    if (!is_numeric($tel)) {
        $message .= '<p class="error">Phone number should be numeric</p>';
    }

    if (strlen($tel) < 6) {
        $message .= '<p class="error">Phone number is incorrect</p>';
    }

    if (empty($message)) {
        $message = '<p class="success">All inputs are valid, thank you</p>';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
        .error {
            color: red;
        }
        .success {
            color: green;
        }
</style>
    <link rel="stylesheet" href="signup.css">
    <title>Sign-up Form</title>
</head>
<body>
<?php echo $message; ?>
    <form method="POST" action="">
        <div>
        <fieldset>
            <legend>Signup Form:</legend>
            <label for="firstname">Firstname</label><br>
            <input type="text" name="firstname" id="firstname" placeholder="Your name..."><br>
            
            <label for="lastname">Lastname</label><br>
            <input type="text" name="lastname" id="lastname" placeholder="Your lastname..."><br>

            <label for="email">E-mail</label><br>
            <input type="email" name="email" id="email" placeholder="Enter email..."><br>

            <label for="password">Password</label><br>
            <input type="password" name="password" id="password" placeholder="Enter password..."><br>

            <label for="password">Confirm Password</label><br>
            <input type="password" name="password" id="password" placeholder="Confirm password..."><br>

            <label for="tel">Phone Number</label><br>
            <input type="tel" name="tel" id="tel" placeholder="Your mobile no. ..."><br>

            <label for="gender">Gender:</label><br>
            <input class="container" type="radio" name="gender" value="male">Male<br>
                
            <input class="container" type="radio" name="gender" value="female"checked >Female<br>
                
            <input class="container" type="radio" name="gender" value="other">Other<br>
                

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
            
            <div>
        <input type="reset" name="cancel" value="Cancel">
        <input type="submit" name="signup" value="Sign Up">
            </div>

        </fieldset>
        </div>
    </form>
    </body>
