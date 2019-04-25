<?PHP
include "../core/competitionC.php";
$competitionC=new competitionC();
if (isset($_POST["nom"])){
	$competitionC->supprimercompetition($_POST["nom"]);
	header('Location: affichercompetition.php');
}

?>