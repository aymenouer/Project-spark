<HTML>
<head>
</head>
<body>
<?php
include "../entities/produit.php";
include "../core/produitC.php";
if (isset($_GET['id'])){

$produit1C=new ProduitC();

    $result=$produit1C->recupererProduit($_GET['id']);

	foreach($result as $row){
		$id=$row['ID_produit'];

		$lib_p=$row['LIB_produit'];
		$prix=$row['Prix'];
		$image=$row['Image'];
		$description=$row['Description'];
		$quantite_p=$row['QTE_produit'];
		$etat=$row['ETAT'];

?>
<form method="POST">
<table>
<caption>Modifier Produit</caption>

<tr>
<td>LIB Produit</td>
<td><input type="text" name="lib_p"  value="<?PHP echo $lib_p ?>"></td>
</tr>
<tr>
<td>Prix</td>
<td><input type="number" name="prix" value="<?PHP echo $prix ?>"></td>
</tr>
<tr>
<td>Quantite de Produit</td>
<td><input type="number" name="qte_p" value="<?PHP echo $quantite_p ?>"></td>
</tr>
<tr>
<td>Image</td>
<td><input type="file" name="image" value="<?PHP echo $image ?>"></td>
</tr>
<tr>
<td>Description</td>
<td><input type="text" name="des" value="<?PHP echo $description ?>"></td>
</tr>
<tr>
<td>Etat</td>
<td> <input  id="etat1" type="radio" name="etat"  value="Disponible"/> </td>
           <td>   <label style="margin-left: -180px;"for="q0r6">Disponible</label> </td>
            <td>  <input  id="etat2" type="radio" value="en arrivage" name="etat"/></td>
            <td>  <label for="q0r7">en arrivage</label></td>
           <td>  <input  id="etat3" type="radio" value="epuisse" name="etat"/></td>
            <td>  <label for="q0r7">epuisse</label></td>
</tr>

<tr>
<td>
			<select  name="lib" >
	<?php
$sql="SElECT * From categories";
		$db = config::getConnexion();
		$liste=$db->query($sql);

		foreach($liste as $row){
	?>


		<option value="<?PHP echo $row['LIB_categorie']; ?>">  <?PHP echo $row['LIB_categorie']; ?> </option>


	<?php 


}
	?>
	</select>
</td>
</tr>


<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	
	$produit=new Produit($_POST['id'],$_POST['lib_p'],$_POST['prix'],$_POST['image'],$_POST['des'],$_POST['qte_p'],$_POST['etat'],$_POST['lib']);
	$produit1C->modifierProduit($produit,$_POST['id_ini']);
	header('Location: afficherProduit.php');
}
?>
</body>
</HTMl>