<?PHP
include "../config.php";
class ratingC {
function afficherrating ($rating){
		echo "id_rating: ".$rating->getid_rating()."<br>";
		echo "mail: ".$rating->getmail()."<br>";
		echo "categorie: ".$rating->getcategorie()."<br>";
		echo "rate: ".$rating->getrate()."<br>";
		echo "message: ".$rating->getmessage()."<br>";
	}

	
	function afficherratings(){
		//$sql="SElECT * From competition e inner join formationphp.competition a on e.cin= a.cin";
		$sql="SElECT * From rating";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerrating($id_rating){
		$sql="DELETE FROM rating where id_rating= :id_rating";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_rating',$id_rating);
		try{
            $req->execute();
           // header('Location: index.php');
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