<?php
include "../core/usersC.php";


 
// Define variables and initialize with empty values
$email ="";
$email_err ="";
 
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 /*
    // Check if email is empty
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter your email.";
    } else{
        $email = trim($_POST["email"]);
    }
    */


    // Validate email
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter your email.";
    } else{
        $users2=new usersC();
        $c=$users2->verifemail($_POST["email"]);
        if ($c==0){
            $email_err = "No account for this email address.";  
        }
        else if ($c==1)
        {
            $email_err="";
            $email = trim($_POST["email"]);
        }

    }

    
    // Validate credentials
    if(empty($email_err)){

        $longueurkey=10;
        $key="";
        for($i=1;$i<$longueurkey;$i++)
        {
            $key.=mt_rand(0,9);
        }

        setcookie ("key",$key,time()+ (10 * 365 * 24 * 60 * 60));
        setcookie ("email",$_POST["email"],time()+ (10 * 365 * 24 * 60 * 60));

    ini_set('smtp_port', 587);
        $header="MIME-Version: 1.0\r\n";
    $header.='From:"Les écuries de Mornag"<support@primfx.com>'."\n";
    $header.='Content-Type:text/html; charset="uft-8"'."\n";
    $header.='Content-Transfer-Encoding: 8bit';
    $message="
    <html></<!DOCTYPE html>
    <html>
    <body>
    <img src='https://i.ibb.co/YW3BW0v/ss.png'>
    <br></br>
    Votre clé est {$key} . Vous pouvez changer votre mot de passe à travers ce clé et vous connecter.  

    </html> ";

    mail($_POST["email"], "Mot de passe oublié ?", $message, $header);
    header("location: putkeyparmail.php");



        /*
        $users2=new usersC();
        <img src='img/logo.png'/>
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
        <h2>Password recovery</h2>
        <p>Please fill in your email.</p>
        <form action="" method="post">
            <div class="form-group <?php echo (!empty($mail_err)) ? 'has-error' : ''; ?>">
                <label>Email</label>
                <input type="email" name="email" class="text-input1" value="<?php echo $email; ?>" required>
                <span class="help-block"><?php echo $email_err; ?></span>
            </div>    
            <div class="form-group">
                <input type="submit" class="btn1" value="Send email">
            </div>
            <p><a href="forgotpassword.php">Go back</a></p>
            <p><a href="login.php">Cancel</a></p>
        </form>
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



      </body>
</html>

























