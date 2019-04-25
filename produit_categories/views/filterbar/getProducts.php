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
    $query = $db->query("SELECT * FROM products $whereSQL $orderSQL");
    if($query->num_rows > 0){
        while($row = $query->fetch_assoc()){
    ?>
        <div class="list-item">
            <h2><?php echo $row["LIB_produit"]; ?></h2>
            <h4>Prix: <?php echo $row["Prix"]; ?></h4>
        </div>
    <?php }
    }else{
        echo 'Product(s) not found';
    }
}
?>