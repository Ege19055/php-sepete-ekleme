<?php 
session_start();
if(isset($_SESSION["shoppingCart"])){

    $shoppingCart = $_SESSION["shoppingCart"];
    $total_count = $shoppingCart["summary"]["total_count"];
    $total_price = $shoppingCart["summary"]["total_price"];
    $shopping_products = $shoppingCart["products"];
}else{
    $total_count = 0;
    $total_price = 0.0;
}

?>

<!------------------ Header ------------------>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Kablosuz Market </a>
    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active">
          <a class=""  href="index.php">Ürünler <span class="sr-only">(current)</span> </a>
          
        </li>
       
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
            <a href="shopping-cart.php">
                <span class="glyphicon glyphicon-shopping-cart cart-icon"></span>
                <span class="badge cart-count"><?php echo $total_count; ?></span>
        </a> 
    </li>
      </ul>
    </div>
  </div>
</nav>

 <!------------------ Header ------------------>