<?PHP
include "../core/sortieC.php";
$sortieC=new sortieC();
if (isset($_POST["nom"])){
	$sortieC->supprimersortie($_POST["nom"]);
	header('Location: affichersortie.php');
}

?>