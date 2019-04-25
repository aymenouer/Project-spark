<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/sortie.php";
include "../core/sortieC.php";
if (isset($_GET['id_sortie'])){
	$sortieC=new sortieC();
    $result=$sortieC->recuperersortie($_GET['id_sortie']);
	foreach($result as $row){
		$id_sortie=$row['id_sortie'];
		$nom=$row['nom'];
		$lieu=$row['lieu'];
		$dates=$row['dates'];
        $prix=$row['prix'];
?>
<form method="POST">
<table>
<caption>Modifier sortie</caption>

<input type="number" name="id_sortie" value="<?PHP echo $id_sortie ?>" hidden>

<tr>
<td>Nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom?>"></td>
</tr>

<tr>
<td>Lieu</td>
<td><input type="text" name="lieu" value="<?PHP echo $lieu?>"></td>
</tr>
<tr>
<td>Date</td>
<td><input type="date" name="dates" value="<?PHP echo $dates?>"></td>
</tr>
<tr>
<td>Prix</td>
<td><input type="number" name="prix" value="<?PHP echo $prix?>"></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_sortie_ini" value="<?PHP echo $_GET['id_sortie'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$sortie1=new sortie($_POST['id_sortie'],$_POST['nom'],$_POST['lieu'],$_POST['dates'],$_POST['prix']);
	$sortieC->modifiersortie($sortie1,$_POST['id_sortie_ini']);
	echo $_POST['id_sortie_ini'];
	header('Location: affichersortie.php');
}
?>
</body>
</HTMl>