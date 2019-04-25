<?php
include "../core/usersC.php";
// Initialize the session
// Check if the user is already logged in, if yes then redirect him to welcome page

 
// Define variables and initialize with empty values
$num ="";
$num_err ="";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 

    // Validate phone number
    if(empty(trim($_POST["num"]))){
        $num_err = "Please enter your phone number.";
    } else{
        $users2=new usersC();
        $c=$users2->verifnum($_POST["num"]);
        if ($c==0){
            $num_err = "No account for this phone number.";  
        }
        else if ($c==1)
        {
            $num_err="";
            $num = trim($_POST["num"]);
        }

    }

    
    
    // Validate credentials
    if(empty($num_err)){
        

        $longueurkey=10;
        $key="";
        for($i=1;$i<$longueurkey;$i++)
        {
            $key.=mt_rand(0,9);
        }

        setcookie ("key",$key,time()+ (10 * 365 * 24 * 60 * 60));
        setcookie ("num",$_POST["num"],time()+ (10 * 365 * 24 * 60 * 60));
        
        $to = $num.'@sms.clicksend.com';
        $from = "zied.lazrak@esprit.tn";
        $message="Votre clé est {$key} . Vous pouvez changer votre mot de passe à travers ce clé et vous connecter.  ";
        $headers = "From: $from\n";
        mail($to, '', $message, $headers);
        header("location: putkeyparsms.php");

        /*
    ini_set('smtp_port', 587);
    	$header="MIME-Version: 1.0\r\n";
	$header.='From:"PrimFX.com"<support@primfx.com>'."\n";
	$header.='Content-Type:text/html; charset="uft-8"'."\n";
	$header.='Content-Transfer-Encoding: 8bit';
	$message="sdlkf,sdé";
	mail($_POST["email"], "Salut tout le monde !", $message, $header);
*/

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
        <p>Please fill in your phone number.</p>
        <form action="" method="post">
            <div class="form-group <?php echo (!empty($num_err)) ? 'has-error' : ''; ?>">
                <label>Phone number</label>
                <input type="number" name="num" class="text-input1" value="<?php echo $num; ?>" >
                <span class="help-block"><?php echo $num_err; ?></span>
            </div>    
            <div class="form-group">
                <input type="submit" class="btn1" value="Send SMS">
            </div>
            <p><a href="forgotpassword.php">Go back</a></p>
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





















  



















