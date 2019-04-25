<?PHP
include "../core/produitC.php";
$produitC=new ProduitC();
echo $_POST["id"];
if (isset($_POST["id"])){

	
	$produitC->supprimerProduit($_POST["id"]);
	header('Location: afficherProduit.php');
}

?>