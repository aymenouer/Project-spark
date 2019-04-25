        <div class="container">
                            
                    <div class="row">
<?php
if(isset($_POST['key'])){
    
    //Include database configuration file
  $dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "projetweb";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    
    //set conditions for filter by price range
    $whereSQL = $orderSQL = '';
    $lib_c = $_POST['key'];
    if(!empty($lib_c)){


        
        $whereSQL = "WHERE lib_c = '".$lib_c."'";
       
    }


    $query = $db->query("SELECT * FROM produit $whereSQL");

    if($query->num_rows > 0){
        while($row = $query->fetch_assoc()){
    ?>
                    <div class="col-lg-4 col-md-6">
                            <div class="single-service-page">
                                <div class="thumbs relative">
                                    <div class="overlay-bg"></div>
                                    <img   class="img-fluid" src="images/<?php echo $row['Image']; ?>" alt="">
                                </div>
                                <div class="details">
                                    <a href="#"><h4> Nom : <?php echo $row['LIB_produit']; ?></h4></a>
                                                <p>
                                Description : <?php echo $row['Description']; ?>
                            </p>
                            <p>
                                Quantite : <?php echo $row['QTE_produit']; ?>
                            </p>
                            <p>
                                prix : <?php echo $row['Prix']; ?>
                            </p>
                            <p>
                                Categorie : <?php echo $row['lib_c']; ?>
                            </p>
                                </div>
                            </div>
                        </div>  
                
    <?php }
    }else{
        echo 'Product(s) not found';
    }
}
?>
</div>
</div>