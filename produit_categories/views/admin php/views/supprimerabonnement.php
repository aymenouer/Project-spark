<?PHP
include "../core/abonnementC.php";
$abonnementC=new abonnementC();
if (isset($_POST["reference"])){
	$abonnementC->supprimerabonnement($_POST["reference"]);
	header('Location: afficherabonnement.php');
}

?>