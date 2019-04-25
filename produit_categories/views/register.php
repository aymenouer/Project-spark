<?php
include "../core/usersC.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password =$email=$num=$nom=$prenom=$photo= "";
$username_err = $password_err = $confirm_password_err =$email_err= $num_err= $nom_err= $prenom_err= "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty($_POST["username"])){
        $username_err = "Please enter a username.";
    } else{
        $users2=new usersC();
    	$c=$users2->verifusername($_POST["username"]);
    	if ($c==0){
    		$username = trim($_POST["username"]);
    	}
    	else if ($c==1)
    	{
    		$username_err = "This username is already taken.";
    	}
    }
    
    // Validate password
    if(empty($_POST["password"])){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty($_POST["confirm_password"])){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }


    // Validate email
    if(empty($_POST["email"])){
        $email_err = "Please enter your email.";
    } else{
        $users2=new usersC();
        $c1=$users2->verifemail($_POST["email"]);
        if ($c1==0){
            $email = trim($_POST["email"]);
        }
        else if ($c1==1)
        {
            $email_err = "This email address is already taken.";
        }
    }


    // Validate phonenumber
    if(empty($_POST["num"])){
        $num_err = "Please enter your phone number.";
    }elseif(strlen(trim($_POST["num"])) < 8){
        $num_err = "Please enter a valid phone number.";
    }else{
        $users2=new usersC();
        $c2=$users2->verifnum($_POST["num"]);
        if ($c2==0){
            $num = trim($_POST["num"]);
        }
        else if ($c2==1)
        {
            $num_err = "This phone number is already taken.";
        }
    }


    // Validate nom
    if(empty($_POST["nom"])){
        $nom_err = "Please enter your name.";     
    }  else{
        $nom = trim($_POST["nom"]);
    }


    // Validate prenom
    if(empty($_POST["prenom"])){
        $prenom_err = "Please enter your family name.";     
    }  else{
        $prenom = trim($_POST["prenom"]);
    }

    // Validate photo

    $profileImageName = time() . '-' . $_FILES["photo"]["name"];
    // For image upload
    $target_dir = "images/";
    $target_file = $target_dir . basename($profileImageName);
    move_uploaded_file($_FILES['photo']['tmp_name'], $target_file);
    // VALIDATION
    // validate image size. Size is calculated in Bytes
    if($_FILES['photo']['size'] > 200000) {
      $msg = "Image size should not be greated than 200Kb";
      $msg_class = "alert-danger";
    }
    // check if file exists
    if(file_exists($target_file)) {
      $msg = "File already exists";
      $msg_class = "alert-danger";
    }
    /*
        if(isset($_FILES['photo']) AND !empty($_FILES['photo']['name'])) {
        $tailleMax = 2097152;
        $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
        if($_FILES['photo']['size'] <= $tailleMax) {
        $extensionUpload = strtolower(substr(strrchr($_FILES['photo']['name'], '.'), 1));
         if(in_array($extensionUpload, $extensionsValides)) {
         $chemin = "membres/photo/".$_SESSION['id'].".".$extensionUpload;
         $resultat = move_uploaded_file($_FILES['photo']['tmp_name'], $chemin);
         if($resultat) {
            $updateavatar = $bdd->prepare('UPDATE users SET photo = :photo WHERE id = :id');
            $updateavatar->execute(array(
               'photo' => $_SESSION['id'].".".$extensionUpload,
               'id' => $_SESSION['id']
               ));
            //header('Location: profil.php?id='.$_SESSION['id']);
            } else {
            $msg = "Erreur durant l'importation de votre photo de profil";
            }
            } else {
             $msg = "Votre photo de profil doit être au format jpg, jpeg, gif ou png";
            }
              } else {
            $msg = "Votre photo de profil ne doit pas dépasser 2Mo";
            }
        }
*/
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)&& empty($email_err)&& empty($num_err)&& empty($nom_err)&& empty($prenom_err)){

        $users3=new usersC();
    	$c=$users3->registeruser($username,$password,$email,$num,$nom,$prenom,$profileImageName);

    	if ($c==0){
    		    // Redirect to login page
                header("location: login.php");
    	}
    	else if ($c==1)
    	{
    		echo "Something went wrong. Please try again later.";
    	}

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
<body data-vide-bg="motionplace">
     <div id="wrapper1">
      <div style="z-index: 0;" class="square">
      <div id="left1">
        <div id="signin1">
          <div class="logo1">
            <img src="https://i.ibb.co/HFGs3NL/h.png" alt="Sluralpright" />
          </div>
    


    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data" >
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label >Username</label>
                <input type="text" name="username" class="text-input1" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="text-input1" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="text-input1" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>

            <div class="form-group <?php echo (!empty($nom_err)) ? 'has-error' : ''; ?>">
                <label>Nom</label>
                <input type="text" name="nom" class="text-input1" value="<?php echo $nom; ?> " required>
                <span class="help-block"><?php echo $nom_err; ?></span>
            </div>   

            <div class="form-group <?php echo (!empty($prenom_err)) ? 'has-error' : ''; ?>">
                <label>Prenom</label>
                <input type="text" name="prenom" class="text-input1" value="<?php echo $prenom; ?> " required>
                <span class="help-block"><?php echo $prenom_err; ?></span>
            </div>   

            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label>Email</label>
                <input type="email" name="email" class="text-input1" value="<?php echo $email; ?> " required>
                <span class="help-block"><?php echo $email_err; ?></span>
            </div>   
            <div class="form-group <?php echo (!empty($num_err)) ? 'has-error' : ''; ?>">
                <label>Phone number</label>
                <input type="number" name="num" class="text-input1" value="<?php echo $num; ?> " required>
                <span class="help-block"><?php echo $num_err; ?></span>
            </div>   
            <div class="form-group">
                <label>Photo</label>
                <input type="file" name="photo" class="text-input1">
            </div>
            <div class="form-group">
                <input type="submit" class="btn1" value="Submit">
                <input type="reset" class="btn1"" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>  
</div>
</div>
</div>
</div>
</body>
</html>























  





















