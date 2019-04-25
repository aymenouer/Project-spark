<?php
// Initialize the session
session_start();

//Destroy the remember me
setcookie('username','',time()-3600);
setcookie('password','',time()-3600);

setcookie('usernameonline','',time()-3600);
setcookie('passwordonline','',time()-3600);
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: login.php");
exit;
?>