<!DOCTYPE html>
<html lang="en">
<head>
<style>
.container{padding: 20px;}
.filter-panel{width:100%;}
.filter-panel p{margin-right: 30px;float: left;}
#productContainer{float: left;width: 100%;}
.list-item{
    float: left;
    width: 15%;
    height: 80px;
    padding: 10px;
    border: 2px solid #cacaca;
    margin: 10px 10px 10px 0px;
}
.list-item h2{margin: 0;}
</style>
<link rel="stylesheet" href="jquery.range.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="jquery.range.js"></script>
<script>
function filterProducts() {
    var price_range = $('.price_range').val();
    $.ajax({
        type: 'POST',
        url: 'getProducts.php',
        data:'price_range='+price_range,
        beforeSend: function () {
            $('.container');
        },
        success: function (html) {
            $('#productContainer').html(html);
            $('.container');
        }
    });
}
</script>
</head>
<body>
<div class="container">
    <div class="filter-panel" onmouseout="filterProducts()" >
        <p><input type="hidden"   class="price_range" value="0,500" /></p>
 
    </div>
    <div id="productContainer">
        <?php
        //Include database configuration file
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "projetweb";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);        
        //get product rows
        $query = $db->query("SELECT * FROM products");
        
        if($query->num_rows > 0){
                while($row = $query->fetch_assoc()){
            ?>
                <div class="list-item">
                    <h2><?php echo $row["name"]; ?></h2>
                    <h4>Price: <?php echo $row["price"]; ?></h4>
                </div>
        <?php }
        }else{
            echo 'Product(s) not found';
        } ?>
    </div>
</div>

<script>
$('.price_range').jRange({
    from: 0,
    to: 500,
    step: 50,
    format: '%s USD',
    width: 1150,
    showLabels: true,
    isRange : true
});
</script>
</body>
</html>