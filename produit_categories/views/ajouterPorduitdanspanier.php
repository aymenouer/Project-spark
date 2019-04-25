<?PHP
include "../core/produitC.php";
$produit1C=new ProduitC();
$listeProduits=$produit1C->afficherProduits();

?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Afficher Produit</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/dataTables.bootstrap.min.css" rel="stylesheet">

</head>

<body>

  <!-- Start your project here-->
 
    <div class="container">

      <h1>Afficher Produit</h1>
      <table class="table table-striped  table-bordered table-hover" id="mydata">
        <thead>
          <tr>
            
<th >ID Produit</th>
<th >LIB Produit</th>
<th >Prix</th>
<th >Image</th>
<th >Description</th>
<th >Quantite de Produit</th>
<th>Quantite </th>
<th >Etat</th>
<th>LIB categorie</th>
<th>id panier</th>

<th >ajouter dans panier</th>
<th >supprimer dans panier</th>



          </tr>
          

        </thead>

            <tbody>
              
 <?PHP

foreach($listeProduits as $row){
  ?>
  <tr >
  <td><?PHP echo $row['ID_produit']; ?></td>
  <td><?PHP echo $row['LIB_produit']; ?></td>
  <td><?PHP echo $row['Prix']; ?></td>
  <td>
<img  class="im1" src= "images/<?PHP echo $row['Image']; ?>" width="50"  height="50">



        </td>

  <td><?PHP echo $row['Description']; ?></td>
  <td><?PHP echo $row['QTE_produit']; ?></td>
          <td>
          <input type="number" name="quan">
        </td>
  <td><?PHP echo $row['ETAT']; ?></td>
    <td><?PHP echo $row['lib_c']; ?></td>
    <td><?PHP echo $row['id_panier']; ?></td>
  <td><a href="ajoutdanspanier.php?id=<?PHP echo $row['ID_produit']; ?>">
  ajouter dans panier</a></td>
    <td><a href="SupprimerPorduitdanspanier.php?id=<?PHP echo $row['ID_produit']; ?>">
  supprimer dans panier</a></td>
  </tr>
  <?PHP
}
?>
            </tbody>

      </table>
    </div>

  <!-- /Start your project here-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/dataTables.bootstrap.min.js"></script>
  <script >
    


$('#mydata').DataTable();





  </script>
</body>

</html>