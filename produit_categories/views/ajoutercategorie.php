<?PHP
include "../entities/categorie.php";
include "../core/CategorieC.php";

if (isset($_POST['des']) and isset($_POST['lib_c'])){

$cate=new Categorie($_POST['lib_c'],$_POST['des']);


$cateC=new CategorieC();
$cateC->ajouterCategories($cate);
header('Location: afficherCategories.php');

}else{
	echo "vérifier les champs";
}
?>