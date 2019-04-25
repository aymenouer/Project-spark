<?PHP
include "../config.php";
class ProduitC {



	function modifierProduit($produit,$id){
		$sql="UPDATE produit SET  LIB_produit=:lib_p,Prix=:prix,Image=:image,Description=:description,QTE_produit=:quantite_p,ETAT=:etat ,lib_c=:lib_c WHERE ID_produit=:id";
		$db = config::getConnexion();
try{	

      $req=$db->prepare($sql);
		$lib_p=$produit->getlib_p();
		$prix=$produit->getprix();
		$image=$produit->getimage();
		$description=$produit->getdescription();
		$quantite_p=$produit->getquantite_p();
		$etat=$produit->getetat();
		$lib_c=$produit->getlib_c();
		$datas = array( ':id'=>$id, ':lib_p'=>$lib_p,':prix'=>$prix,':image'=>$image,':description'=>$description,':quantite_p'=>$quantite_p,':etat'=>$etat,':lib_c'=>$lib_c);
		$req->bindValue(':id',$id);
		$req->bindValue(':lib_p',$lib_p);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':image',$image);
		$req->bindValue(':description',$description);
		$req->bindValue(':quantite_p',$quantite_p);
		$req->bindValue(':etat',$etat);
		$req->bindValue(':lib_c',$lib_c);
            $s=$req->execute();
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}



		function recupererProduit($id){
		$sql="SELECT * FROM produit where ID_produit= $id";
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
	
		function supprimerProduit($id){
		$sql="DELETE FROM produit where ID_produit= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
     
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function ajouterProduit($produit){
		$sql="insert into produit (ID_produit,LIB_produit,Prix,Image,Description,QTE_produit,ETAT,lib_c,id_panier) values ( :id,:lib_p,:prix,:image,:description,:quantite_p,:etat,:lib_c,:id_panier)";
		$db = config::getConnexion();
		try{
		$id_panier=0;
        $req=$db->prepare($sql);
		$lib_c=$produit->getlib_c();
		$id=$produit->getid();
		$lib_p=$produit->getlib_p();
		$prix=$produit->getprix();
		$image=$produit->getimage();
		$description=$produit->getdescription();
		$quantite_p=$produit->getquantite_p();
		$etat=$produit->getetat();
		$req->bindValue(':id',$id);
		$req->bindValue(':lib_c',$lib_c);
		$req->bindValue(':id_panier',$id_panier);
		$req->bindValue(':lib_p',$lib_p);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':image',$image);
		$req->bindValue(':description',$description);
		$req->bindValue(':quantite_p',$quantite_p);
		$req->bindValue(':etat',$etat);
		
            $req->execute();
            echo "ajouter avec succsess";
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
		function afficherProduits(){

		$sql="SElECT * From produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	


}

?>