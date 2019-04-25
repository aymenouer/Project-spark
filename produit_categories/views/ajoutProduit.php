	<?php
include "../config.php";

	?>

<HTML>
<head>
</head>
<body>
<form method="POST" action="ajouterproduit.php">
<table>
<caption>Ajouter Produit</caption>
<tr>
<td>ID Produit</td>
<td><input type="number" name="id"></td>
</tr>
<tr>
<td>LIB Produit</td>
<td><input type="text" name="lib_p"></td>
</tr>
<tr>
<td>Prix</td>
<td><input type="number" name="prix"></td>
</tr>
<tr>
<td>Quantite de Produit</td>
<td><input type="number" name="qte_p"></td>
</tr>
<tr>
<td>Image</td>
<td><input type="file"  accept=".jpg, .jpeg, .png" name="image"></td>
</tr>
<tr>
<td>Description</td>
<td><input type="text" name="des"></td>
</tr>
<tr>
<td>Etat</td>

     <td> <input  id="etat1" type="radio" name="etat"  value="Disponible"/> </td>
           <td>   <label style="margin-left: -230px;"for="q0r6">Disponible</label> </td>
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
<td><input type="submit" name="ajouter" value="ajouter"></td>
</tr>
<tr>
<td></td>
<td><a href="afficherProduit.php"> afficher les produits</a></td>
</tr>
</table>
</form>
</body>
</HTMl>