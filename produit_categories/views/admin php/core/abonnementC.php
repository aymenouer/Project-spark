<?PHP
include "../config.php";
class abonnementC {
function afficherabonnement ($abonnement){
		echo "Reference: ".$abonnement->getreference()."<br>";
		echo "Duree: ".$abonnement->getduree()."<br>";
		echo "prix: ".$abonnement->getprix()."<br>";
		echo "descrription: ".$abonnement->getdescr()."<br>";
	}

	function ajouterabonnement($abonnement){
		$sql="insert into abonnement (reference,duree,prix,descr) values (:reference,:duree,:prix,:descr)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $reference=$abonnement->getreference();
        $duree=$abonnement->getduree();
        $prix=$abonnement->getprix();
        $descr=$abonnement->getdescr();

		$req->bindValue(':reference',$reference);
		$req->bindValue(':duree',$duree);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':descr',$descr);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherabonnements(){
		//$sql="SElECT * From competition e inner join formationphp.competition a on e.cin= a.cin";
		$sql="SElECT * From abonnement";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerabonnement($reference){
		$sql="DELETE FROM abonnement where reference= :reference";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':reference',$reference);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifierabonnement($abonnement,$reference){
		$sql="UPDATE abonnement SET reference=:referencee, duree=:duree,prix=:prix,descr=:descr WHERE reference=:reference";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);

		$referencee=$abonnement->getreference();
        $duree=$abonnement->getduree();
        $prix=$abonnement->getprix();
        $descr=$abonnement->getdescr();

		$datas = array(':referencee'=>$referencee, ':duree'=>$duree, ':prix'=>$prix, ':descr'=>$descr);

		$req->bindValue(':referencee',$referencee);
		$req->bindValue(':reference',$reference);
		$req->bindValue(':duree',$duree);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':descr',$descr);

		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}

	function recupererabonnement($reference){

		$sql="SELECT * from abonnement where reference=$reference";
		$db = config::getConnexion();

		try{
			echo "please";
		$liste=$db->query($sql);
		return $liste;

		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	/*
	function rechercherListecompetitions($nom){
		$sql="SELECT * from competition where nom=$nom";
		$db = config::getConnexion();
		$req=$db->prepare($sql);
		try{

		$res=$db->query($sql);
		return $res;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
*/
}

?>