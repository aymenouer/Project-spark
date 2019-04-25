<?PHP
	include "../entities/stage.php";
	include "../core/stageC.php";

if (isset($_POST['nom']) and isset($_POST['lieu']) and isset($_POST['dates']) and isset($_POST['formateur']) and isset($_POST['programme']))
{
	$stage1=new stage(0,$_POST['nom'],$_POST['lieu'],$_POST['dates'],$_POST['formateur'],$_POST['programme']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
		$stage1C=new stageC();

		$stage1C->ajouterstage($stage1);

		header('Location: afficherstage.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>