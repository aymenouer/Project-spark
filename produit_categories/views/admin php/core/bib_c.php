<?PHP
include "../config.php";
class bibc {

			function recupererbib($id){
		$sql="SELECT * FROM bib where id_p= $id";
		$db = config::getConnexion();
		$req=$db->prepare($sql);
		try{

		$res = $db->query($sql);

		return $res;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
				function supprimerbib($id){
		$sql="DELETE FROM bib where id_p= $id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		try{
            $req->execute();
     
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
			function afficherbib(){

		$sql="SElECT * From bib";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
function ajouterbib($bib){
		$sql="insert into bib (image_f,image_s,image_t,id_p) values ( :image_f,:image_s,:image_t,:id_p)";
		$db = config::getConnexion();
		try{
	
        $req=$db->prepare($sql);
		$image_f=$bib->getimage_f();
		$image_s=$bib->getimage_s();
		$image_t=$bib->getimage_t();
		$id_p=$bib->getid_p();
		$req->bindValue(':image_f',$image_f);
		$req->bindValue(':image_s',$image_s);
		$req->bindValue(':image_t',$image_t);
		$req->bindValue(':id_p',$id_p);
		
            $req->execute();
            echo "ajouter avec succsess";
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}



	}

?>