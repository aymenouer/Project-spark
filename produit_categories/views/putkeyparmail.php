<?php
//require "forgotpasswordparmail.php";
include "../core/usersC.php";

 
// Define variables and initialize with empty values
$password ="";
$password_err ="";
 
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $key = $_COOKIE['key'];
    $email = $_COOKIE['email'];

    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter the key that has been sent to you.";
    } else {
        $password = trim($_POST["password"]);
        if (empty($password_err) && ($password != $key))
            $password_err = "Invalid key";
        else{
            $password_err = "";
        }
    }



    
    // Validate credentials
    if(empty($password_err)){


        $users2=new usersC();
        $c=$users2->connexionparmail($email);
        if ($c==0){
                 $_SESSION["loggedin"] = true;
                 header('location:reset-password obliged.php');
                 }
        else {echo "Oops! Something went wrong. Please try again later."; }


        /*
        $users2=new usersC();
        $c=$users2->connexion($_POST["username"],$_POST["password"]);
        if ($c==0){

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            header("location: welcome.php");
        }
        else if ($c==1)
        {
            $password_err = "The password you entered was not valid.";
        }
        else if ($c==2)
        {
            $username_err = "No account found with that username.";
        }
        else {echo "Oops! Something went wrong. Please try again later."; }
        // Close statement
        unset($stmt);
        */
    }
    
    // Close connection
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
        <h2>Password recovery</h2>
        <p>Please fill in the key that has been sent to you.</p>
        <form action="" method="post">
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>New password</label>
                <input type="text" name="password" class="text-input1" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>    
            <div class="form-group">
                <input type="submit" class="btn1" value="Validate">
            </div>
            <p><a href="forgotpasswordparmail.php">Go back</a></p>
            <p><a href="login.php">Cancel</a></p>
        </form>
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





