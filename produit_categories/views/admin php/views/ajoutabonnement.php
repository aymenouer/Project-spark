<?PHP
include "../entities/abonnement.php";
include "../core/abonnementC.php";

if (isset($_POST['reference']) and isset($_POST['duree']) and isset($_POST['prix']) and isset($_POST['descr']))
{
$abonnement1=new abonnement($_POST['reference'],$_POST['duree'],$_POST['prix'],$_POST['descr']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$abonnement1C=new abonnementC();
$abonnement1C->ajouterabonnement($abonnement1);

header('Location: afficherabonnement.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>