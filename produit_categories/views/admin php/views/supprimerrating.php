<?PHP
include "../core/ratingC.php";
$ratingC=new ratingC();
if (isset($_POST["id_rating"])){
	$ratingC->supprimerrating($_POST["id_rating"]);
	header('Location: afficheravis.php');
}

?>