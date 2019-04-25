<?PHP
include "../config.php";
class sortieC {
function affichersortie ($sortie){
		echo "Nom: ".$sortie->getnom()."<br>";
		echo "Lieu: ".$sortie->getlieu()."<br>";
		echo "Date: ".$sortie->getdates()."<br>";
		echo "prix: ".$sortie->getprix()."<br>";
	}

	function ajoutersortie($sortie){
		$sql="insert into sortie (nom,lieu,dates,prix) values (:nom, :lieu,:dates,:prix)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom=$sortie->getnom();
        $lieu=$sortie->getlieu();
        $dates=$sortie->getdates();
        $prix=$sortie->getprix();

		$req->bindValue(':nom',$nom);
		$req->bindValue(':lieu',$lieu);
		$req->bindValue(':dates',$dates);
		$req->bindValue(':prix',$prix);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function affichersorties(){
		//$sql="SElECT * From sortie e inner join formationphp.sortie a on e.cin= a.cin";
		$sql="SElECT * From sortie";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimersortie($nom){
		$sql="DELETE FROM sortie where nom= :nom";
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
	function modifiersortie($sortie,$id_sortie){
		$sql="UPDATE sortie SET nom=:nomm, lieu=:lieu,dates=:dates,prix=:prix WHERE id_sortie=:id_sortie";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);

		$nomm=$sortie->getnom();
        $lieu=$sortie->getlieu();
        $dates=$sortie->getdates();
        $prix=$sortie->getprix();

		$datas = array(':id_sortie'=>$id_sortie, ':nomm'=>$nomm, ':lieu'=>$lieu,':dates'=>$dates,':prix'=>$prix);

		$req->bindValue(':id_sortie',$id_sortie);
		$req->bindValue(':nomm',$nomm);
		$req->bindValue(':lieu',$lieu);
		$req->bindValue(':dates',$dates);
		$req->bindValue(':prix',$prix);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recuperersortie($id_sortie){

		$sql="SELECT * from sortie where id_sortie=$id_sortie";
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
	
	function rechercherListesorties($nom){
		$sql="SELECT * from sortie where nom=$nom";
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