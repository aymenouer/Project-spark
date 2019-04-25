<?PHP
include "../config.php";
class competitionC {
function affichercompetition ($competition){
		echo "Nom: ".$competition->getnom()."<br>";
		echo "Nombre de Participants: ".$competition->getnbre()."<br>";
		echo "Lieu: ".$competition->getlieu()."<br>";
		echo "Date: ".$competition->getdatec()."<br>";
		echo "Description: ".$competition->getdescri()."<br>";
	}

	function ajoutercompetition($competition){
		$sql="insert into competition (nom,nbre,lieu,datec,descri) values (:nom, :nbre,:lieu,:datec,:descri)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom=$competition->getnom();
        $nbre=$competition->getnbre();
        $lieu=$competition->getlieu();
        $datec=$competition->getdatec();
        $descri=$competition->getdescri();

		$req->bindValue(':nom',$nom);
		$req->bindValue(':nbre',$nbre);
		$req->bindValue(':lieu',$lieu);
		$req->bindValue(':datec',$datec);
		$req->bindValue(':descri',$descri);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function affichercompetitions(){
		//$sql="SElECT * From competition e inner join formationphp.competition a on e.cin= a.cin";
		$sql="SElECT * From competition";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimercompetition($nom){
		$sql="DELETE FROM competition where nom= :nom";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':nom',$nom);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifiercompetition($competition,$id_comp){
		$sql="UPDATE competition SET nom=:nomm, nbre=:nbre,lieu=:lieu,datec=:datec,descri=:descri WHERE id_comp=:id_comp";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);

		$nomm=$competition->getnom();
        $nbre=$competition->getnbre();
        $lieu=$competition->getlieu();
        $datec=$competition->getdatec();
        $descri=$competition->getdescri();

		$datas = array(':id_comp'=>$id_comp,':nomm'=>$nomm, ':nbre'=>$nbre,':lieu'=>$lieu,':datec'=>$datec,':datec'=>$datec);

		$req->bindValue(':id_comp',$id_comp);
		$req->bindValue(':nomm',$nomm);
		$req->bindValue(':nbre',$nbre);
		$req->bindValue(':lieu',$lieu);
		$req->bindValue(':datec',$datec);
		$req->bindValue(':descri',$descri);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recuperercompetition($id_comp){

		$sql="SELECT * from competition where id_comp=$id_comp";
		$db = config::getConnexion();

		try{
		$liste=$db->query($sql);
		return $liste;

		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
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
}

?>