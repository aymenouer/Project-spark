<?PHP
include "../config.php";
class stageC {
function afficherstage ($stage){
		echo "Nom: ".$stage->getnom()."<br>";
		echo "Lieu: ".$stage->getlieu()."<br>";
		echo "Date: ".$stage->getdates()."<br>";
		echo "Formateur: ".$stage->getformateur()."<br>";
		echo "programme: ".$stage->getprogramme()."<br>";
	}

	function ajouterstage($stage){
		$sql="insert into stage (nom,lieu,dates,formateur,programme) values (:nom, :lieu,:dates,:formateur,:programme)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom=$stage->getnom();
        $lieu=$stage->getlieu();
        $dates=$stage->getdates();
        $formateur=$stage->getformateur();
        $programme=$stage->getprogramme();

		$req->bindValue(':nom',$nom);
		$req->bindValue(':lieu',$lieu);
		$req->bindValue(':dates',$dates);
		$req->bindValue(':formateur',$formateur);
		$req->bindValue(':programme',$programme);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherstages(){
		//$sql="SElECT * From stage e inner join formationphp.stage a on e.cin= a.cin";
		$sql="SElECT * From stage";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerstage($nom){
		$sql="DELETE FROM stage where nom= :nom";
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
	function modifierstage($stage,$id_stage){
		$sql="UPDATE stage SET nom=:nomm, lieu=:lieu,dates=:dates,formateur=:formateur,programme=:programme WHERE id_stage=:id_stage";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);

		$nomm=$stage->getnom();
        $lieu=$stage->getlieu();
        $dates=$stage->getdates();
        $formateur=$stage->getformateur();
        $programme=$stage->getprogramme();

		$datas = array(':id_stage'=>$id_stage, ':nomm'=>$nomm, ':lieu'=>$lieu,':dates'=>$dates,':formateur'=>$formateur,':programme'=>$programme);

		$req->bindValue(':id_stage',$id_stage);
		$req->bindValue(':nomm',$nomm);
		$req->bindValue(':lieu',$lieu);
		$req->bindValue(':dates',$dates);
		$req->bindValue(':formateur',$formateur);
		$req->bindValue(':programme',$programme);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererstage($id_stage){

		$sql="SELECT * from stage where id_stage=$id_stage";
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
	
	function rechercherListestages($nom){
		$sql="SELECT * from stage where nom=$nom";
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