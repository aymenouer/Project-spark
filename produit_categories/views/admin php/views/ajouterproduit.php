<?PHP
include "../entities/produit.php";
include "../core/produitC.php";

if (isset($_POST['id']) and isset($_POST['lib_p']) and isset($_POST['prix']) and isset($_POST['qte_p']) and isset($_POST['image']) and isset($_POST['des']) and isset($_POST['etat']) and isset($_POST['lib'])){




if ($_POST['lib_p']=="")
{
echo "<script>window.alert('problem');</script>";

}
else
{
	$produit1=new Produit($_POST['id'],$_POST['lib_p'],$_POST['prix'],$_POST['image'],$_POST['des'],$_POST['qte_p'],$_POST['etat'],$_POST['lib']);


$produit1C=new ProduitC();
$produit1C->ajouterProduit($produit1);
header("Location: afficherProduit.php");
}




}else{
	echo "vérifier les champs";
}
?>