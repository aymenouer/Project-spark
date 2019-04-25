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
<th >Etat</th>
<th>LIB categorie</th>
<th >supprimer</th>
<th >modifier</th>



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
  <td><?PHP echo $row['ETAT']; ?></td>
    <td><?PHP echo $row['lib_c']; ?></td>

  <td><form method="POST" action="supprimerProduit.php">



                                   <a href="#delete<?php
echo $row['ID_produit'];
?>" data-toggle="modal">
                            <button type='button'  name="supprimer" value="supprimer" class='btn btn-danger btn-sm'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></button>
                        </a>

                         <div id="delete<?php
echo $row['ID_produit'];
?>" class="modal fade" role="dialog">
                          <h1>
  




</h1>
        <div class="modal-dialog">
         <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Delete</h4>
                                    </div>
                                    <div class="modal-body">



                                        <input type="hidden" name="id" value="<?php
echo $row['ID_produit'];
?>">
                                        <div class="alert alert-danger">Are you Sure you want Delete <strong>
                                                <?php echo $row['ID_produit']; ?>?</strong> </div>
                                        <div class="modal-footer">
                                            <button type="submit" name="delete" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> YES</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> NO</button>
                                        </div>
                                    </div>
                                </div>
                              </div>
                            </div>




  </form>
  </td>
    <td>
  <button><a href="modifierProduit.php?id=<?PHP echo $row['ID_produit']; ?>">
  Modifier</a></button>
</td>
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
<a href="ajoutProduit.php"> ajouter un produit</a>
<br>
<a href="stati/stat.php"> statistique </a>
<div class="imprimer">
        <input id="impression" name="impression" type="submit" onclick="imprimer_page()" value="Exporter en pdf " />
      </div>
 
       <script type="text/javascript">
            function imprimer_page(){
            window.print();
             }
        </script>

<?php
       if(isset($_POST['delete'])){
                            // sql to delete a record
                            $delete_id = $_POST['delete_id'];
                            $sql = "DELETE FROM tbl_items WHERE id='$delete_id' ";
                            if ($conn->query($sql) === TRUE) {
                                $sql = "DELETE FROM tbl_inventory WHERE id='$delete_id' ";
                                if ($conn->query($sql) === TRUE) {
                                    $sql = "DELETE FROM tbl_inventory WHERE id='$delete_id' ";
                                    echo '<script>window.location.href="inventory.php"</script>';
                                } else {
                                    echo "Error deleting record: " . $conn->error;
                                }
                            } else {
                                echo "Error deleting record: " . $conn->error;
                            }
                        }
                        ?>