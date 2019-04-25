<?php
include "../config.php";
		function afficher(){

		$sql="SElECT * From historique";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	$liste=afficher();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
      <table border="1" >
        <thead>
          <tr>
            
<th >Description</th>




          </tr>
          

        </thead>


            <tbody>
              
 <?PHP

foreach($liste as $row){
  ?>
  <tr >
  <td><?PHP echo $row['description']; ?></td>



  </tr>
  <?PHP
}
?>
            </tbody>

      </table></html>