<?php
include "../core/usersC.php";

 
// Check if the user is logged in, otherwise redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
 
// Include config file
require_once "../config.php";
 
// Define variables and initialize with empty values
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate new password
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Please enter the new password.";     
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "Password must have atleast 6 characters.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm the password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
        
    // Check input errors before updating the database
    if(empty($new_password_err) && empty($confirm_password_err)){
        $users2=new usersC();
        $c=$users2->resetpassword($new_password);
        if ($c==0){
                // Password updated successfully. Destroy the session, and redirect to login page
                session_destroy();
                header("location: login.php");
        }
        else if ($c==1)
        {
            echo "Oops! Something went wrong. Please try again later.";
        }

    }
    
    // Close connection
    unset($pdo);
}
?>
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot password</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    
</body>
</html>





<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
     <title>Responsive Video Background</title>
     <link rel="stylesheet" href="style.css">
     <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
     <script src="jquery.vide.js"></script>
</head>
<body data-vide-bg="motionplace">
     <div id="wrapper1">
      <div style="z-index: 0;" class="square">
      <div id="left1">
        <div id="signin1">
          <div class="logo1">
            <img src="https://i.ibb.co/HFGs3NL/h.png" alt="Sluralpright" />
          </div>
    


    <div class="wrapper">
<div class="wrapper">

        <h2>Reset Password</h2>
        <p>Please fill out this form to reset your password.</p>
        <br>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
            <div class="form-group <?php echo (!empty($new_password_err)) ? 'has-error' : ''; ?>">
                <label style="font-size: 17px;">New Password</label>
                <input type="password" name="new_password" class="text-input1" value="<?php echo $new_password; ?>">
                <span class="help-block"><?php echo $new_password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label style="font-size: 17px;">Confirm Password</label>
                <input type="password" name="confirm_password" class="text-input1">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn1" value="Submit">
                <a class="btn btn-link" href="putkeyparsms.php">Go back</a>
            </div>
        </form>
        <br>
        <br>
        <br>

    </div>
    </div>  
</div>
</div>
</div>
      <div id="right1">
        <div id="showcase1">
          <div class="showcase-content1">
            <h1 class="showcase-text1">
              Les écuries de <strong>Mornag</strong>
            </h1>
            <a href="index.php" class="secondary-btn1">Visiter le site officiel</a>
          </div>
        </div>
      </div>
</div>

</body>
</html>











































