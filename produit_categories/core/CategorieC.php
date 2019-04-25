<?PHP
include "../config.php";
class CategorieC {

	function ajouterCategories($cate){
		$sql="insert into categories (description,LIB_categorie) values ( :des,:lib_c)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);

		$lib_c=$cate->getlib_c();
		$des=$cate->getdescription();

		$req->bindValue(':lib_c',$lib_c);
		$req->bindValue(':des',$des);
		
            $req->execute();
            echo "ajouter avec succsess";
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
		function afficherCategories(){

		$sql="SElECT * From categories";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
			function supprimerCategorie($lib){
		$sql="DELETE FROM categories where LIB_categorie= :LIB_categorie";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':LIB_categorie',$lib);
		try{
            $req->execute();
     
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function modifierCategorie($cat,$lib){
		echo $lib;
		$sql="UPDATE categories SET  description=:des WHERE LIB_categorie=:lib";
		$db = config::getConnexion();
try{	

      $req=$db->prepare($sql);
		$lib=$cat->getdescription();
		
		$datas = array( ':id'=>$id, ':lib'=>$lib);

		$req->bindValue(':lib',$lib);
		$req->bindValue(':lib',$lib);
            $s=$req->execute();
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}



		function recupererCategorie($id){
			

		$sql="SELECT * FROM categories where LIB_categorie= $id";
		$db = config::getConnexion();
	

		try{

		$res = $db->query($sql);

		return $res;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	

}

?>