
<?php

include "../entities/categorie.php";
include "../core/CategorieC.php";


if (isset($_GET['id'])){

$Categorie=new CategorieC();

    $result=$Categorie->recupererCategorie($_GET['id']);

	foreach($result as $row){
		echo "string";
		$LIB_categorie=$row['LIB_categorie'];
		$Description=$row['LIB_produit'];

?>
<form method="POST">
<table>
<caption>Modifier Categorie</caption>


<tr>
<td>LIB Categorie</td>
<td><input type="text" name="lib_c"  value="<?PHP echo $LIB_categorie ?>"></td>
</tr>
<tr>
<td>Description</td>
<td><textarea  rows="10" name="des" cols="40" value="<?PHP echo $Description ?>"></textarea> </td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="LIB_categorie_ini" value="<?PHP echo $_GET['LIB_categorie'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	
	$categorie=new categorie($_POST['lib_c'],$_POST['des']);
	$produit1C->modifierCategorie($categorie,$_POST['LIB_categorie_ini']);
	header('Location: afficherCategories.php');
}
?>
