<?PHP
include "../core/CategorieC.php";
$Categorie=new CategorieC();
echo $_POST["id"];
if (isset($_POST["id"])){

	
	$Categorie->supprimerCategorie($_POST["id"]);
	header('Location: afficherCategories.php');
}

?>