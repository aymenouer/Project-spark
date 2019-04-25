<?PHP
include "../core/CategorieC.php";
$Categorie=new CategorieC();
$listeCategories=$Categorie->afficherCategories();

?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Afficher Categorie</title>

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

      <h1>Afficher Categorie</h1>
      <table class="table table-striped  table-bordered table-hover" id="mydata">
        <thead>
          <tr>
            

<th >LIB Categorie</th>
<th >Description</th>
<th >supprimer</th>
<th >modifier</th>



          </tr>
          

        </thead>
          <tfoot>
                 <tr>
            
<th >LIB Categorie</th>
<th >Description</th>
<th >supprimer</th>
<th >modifier</th>



          </tr>
            

          </tfoot>
            <tbody>
              
 <?PHP

foreach($listeCategories as $row){
  ?>
  <tr >
  <td><?PHP echo $row['LIB_categorie']; ?></td>
  <td><?PHP echo $row['description']; ?></td>
  <td><form method="POST" action="supprimerCategorie.php">

  <input type="submit" name="supprimer" value="supprimer">

  <input type="hidden" value="<?PHP echo $row['LIB_categorie']; ?>" name="id">
  </form>
  </td>
  <td><a href="modifierCategorie.php?id=<?PHP echo $row['LIB_categorie']; ?>">
  Modifier</a></td>
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
<a href="ajoutercategories.html"> ajouter un Categorie</a>
<br>
<a href="stati/statC.php"> statistique </a>

<div class="imprimer">
        <input id="impression" name="impression" type="submit" onclick="imprimer_page()" value="Exporter en pdf " />
      </div>
 
       <script type="text/javascript">
            function imprimer_page(){
            window.print();
             }
        </script>

