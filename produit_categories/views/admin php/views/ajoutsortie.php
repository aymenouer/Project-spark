<?PHP
	include "../entities/sortie.php";
	include "../core/sortieC.php";

if (isset($_POST['nom']) and isset($_POST['lieu']) and isset($_POST['dates']) and isset($_POST['prix']))
{
	$sortie1=new sortie(0,$_POST['nom'],$_POST['lieu'],$_POST['dates'],$_POST['prix']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
		$sortie1C=new sortieC();

		$sortie1C->ajoutersortie($sortie1);

		header('Location: affichersortie.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>