<?php
include "../core/usersC.php";
require_once "../config.php";

    if(isset($_COOKIE["usernameonline"]) and (isset($_COOKIE["passwordonline"])) ) 
    {
        $usernameonline = $_COOKIE['usernameonline'];
        $passwordonline = $_COOKIE['passwordonline'];
        $users3=new usersC();
        $c=$users3->connexion($usernameonline,$passwordonline);
        header('location: produit.php');
    }
$username = $password = "";
$username_err = $password_err = "";
 
 // Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
      if(empty($_POST["username"])){
        $username_err = "Please enter username";
    } else{
        $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if(empty($_POST["password"])){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
      $users2=new usersC();
      $c=$users2->connexion($_POST["username"],$_POST["password"]);
      if ($c==0){
            /*
                            // Remember me
                                if (isset($POST['rememberme']))
                                {
                                    setcookie('username',$username,time()+365*24*3600,null,null,false,true);
                                    setcookie('password',$password,time()+365*24*3600,null,null,false,true);
                                }
                                */

                                                if(!empty($_POST["rememberme"])) {
                                                   //COOKIES for username online
                                                 setcookie ("username",$_POST["username"],time()+ (10 * 365 * 24 * 60 * 60));
                                                   //COOKIES for password online
                                                setcookie ("password",$_POST["password"],time()+ (10 * 365 * 24 * 60 * 60));
                                                  header('location: produit.php');
                                                  } 

                                                else 
                                                {
                                                    if(isset($_COOKIE["username"])) {
                                                        setcookie ("username","");
                                                if(isset($_COOKIE["password"])) {
                                                 setcookie ("password","");
                                                }
                                                  }
                                                } 
                                                

                                                if(!empty($_POST["stayloggedin"])) {
                                                   //COOKIES for username
                                                 setcookie ("usernameonline",$_POST["username"],time()+ (10 * 365 * 24 * 60 * 60));
                                                   //COOKIES for password
                                                setcookie ("passwordonline",$_POST["password"],time()+ (10 * 365 * 24 * 60 * 60));
                                                     header('location: produit.php');
                                                  } 

                                                else 
                                                {
                                                    if(isset($_COOKIE["usernameonline"])) {
                                                        setcookie ("usernameonline","");
                                                if(isset($_COOKIE["passwordonline"])) {
                                                 setcookie ("passwordonline","");
                                                }
                                                  }
                                                } 






                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                             header('location: produit.php');
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
    }

 }
?>
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
<style>

</style>
<body data-vide-bg="motionplace">
     <div id="wrapper1">
      <div style="z-index: 0;" class="square">
            <br>
            <br>
      <div id="left1">
        <div id="signin1">
          <div class="logo1">
            <img src="https://i.ibb.co/HFGs3NL/h.png" alt="Sluralpright"" />
          </div>
    






        <form action="" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label style="font-size: 17px;">Username</label>
                <input style="height: 42px;" type="text" name="username" class="text-input1" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } else {echo $username;} ?>">
                <span style="font-size: 16px;"class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label style="font-size: 17px;" >Password</label>
                <input style="height: 42px;" type="password" name="password" class="text-input1" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"];}?>">
                <span style="font-size: 16px;" class="help-block"><?php echo $password_err; ?></span>
            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="checkbox" name="rememberme" id="remembercheckbox" <?php if(isset($_COOKIE["username"])) { ?> checked <?php } ?> /><label style="font-size: 17px;" for="remembercheckbox">&nbsp; Remember me &nbsp; &nbsp; &nbsp;</label>
            <input type="checkbox" name="stayloggedin" id="stayloggedin" <?php if(isset($_COOKIE["usernameonline"])) { ?> checked <?php } ?> /><label style="font-size: 17px;" for="stayloggedin">&nbsp;Stay logged in</label>
            <div class="form-group">
                <button class="btn1" type="submit" value="Login">Login</button>
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <p style="font-size: 17px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Don't have an account? <a href="register.php">Sign up now</a>.</p>
            <p style="font-size: 16px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="forgotpassword.php">Forgot your password ?</a></p>
        </form>
            <br>
            <br>

        <footer id="main-footer1">
          <p>Copyright &copy; 2018, Sluralpright Tous droits réservés</p>
          <div>
            <a href="#">termes d'utilisation</a> | <a href="#">politique de confidentialité</a>
          </div>
        </footer>
      </div>
      </div>
      </div>
      <div id="right1">
        <div id="showcase1">
          <div class="showcase-content1">
            <h1 class="showcase-text1">
              Les écuries de <strong>Mornag</strong>
            </h1>
            <a href="produit.php" class="secondary-btn1">Visiter le site officiel</a>
          </div>
        </div>
      </div>
    </div>
</body>
</html>
