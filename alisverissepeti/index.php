<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ürün Listesi</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">
</head>
<body>
  
<?php require_once "lib/db.php"; ?>

<?php 

/* Verileri Çekme Bölümü */ 

$products = $db->query("SELECT * FROM products" ,PDO::FETCH_OBJ)->fetchAll();


?>

 <!----- header ------>
<?php include "lib/navbar.php"; ?>
<!----- header ------>

 <!------------------ Main Content --------------->

  <div class="container">
    <h2 class="text-center">Ürün Listesi</h2>
    <hr>
    <div class="row">

      <?php foreach($products as $product) { ?>

        <div class="col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="assets/images/<?php echo $product->img_url; ?>" alt="<?php echo $product->product_name; ?>">
            <div class="caption">
              <h3><?php echo $product->product_name; ?></h3>
              <p><?php echo $product->detail; ?></p>
              <p class="text-right price-container"><strong><?php echo $product->price; ?> TL</strong></p>
              <p>
                <button product-id="<?php echo $product->id; ?>" class="btn btn-primary btn-block addToCartBtn" role="button">
                  <span class="glyphicon glyphicon-shopping-cart"></span> Sepete Ekle
                </button>
              </p>
            </div>
          </div>
        </div>

        <?php } ?>
       
      </div>
  </div>


  <!------------------ Main Content --------------->

<script src="assets/js/jquery-3.6.0.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/custom.js"></script>
</body>

</html>