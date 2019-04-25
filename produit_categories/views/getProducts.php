        <div class="container">
                            
                    <div class="row">

<?php
if(isset($_POST['price_range'])){
    
    //Include database configuration file
  $dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "projetweb";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    
    //set conditions for filter by price range
    $whereSQL = $orderSQL = '';
    $priceRange = $_POST['price_range'];
    if(!empty($priceRange)){
        $priceRangeArr = explode(',', $priceRange);
        $whereSQL = "WHERE Prix BETWEEN '".$priceRangeArr[0]."' AND '".$priceRangeArr[1]."'";
        $orderSQL = " ORDER BY Prix ASC ";
    }else{
        $orderSQL = " ORDER BY Prix DESC ";
    }
    
    //get product rows
    $query = $db->query("SELECT * FROM produit $whereSQL $orderSQL");
    
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