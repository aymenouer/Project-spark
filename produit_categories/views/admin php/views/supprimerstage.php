<?PHP
include "../core/stageC.php";
$stageC=new stageC();
if (isset($_POST["nom"])){
	$stageC->supprimerstage($_POST["nom"]);
	header('Location: afficherstage.php');
}

?>