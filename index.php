<?php
  require_once './includes/header.php';
?>

<div class="container-fluid">
  <div
    id="carouselExampleControls"
    class="carousel slide"
    data-bs-ride="carousel"
  >
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img
          src="./images/background.jpg"
          class="d-block w-100"
          alt="background"
          height="400"
        />
      </div>
      <div class="carousel-item">
        <img
          src="./images/background2.jpg"
          class="d-block w-100"
          alt="..."
          height="400"
        />
      </div>
      <div class="carousel-item">
        <img
          src="./images/background3.jpg"
          class="d-block w-100"
          alt="..."
          height="400"
        />
      </div>
    </div>
    <button
      class="carousel-control-prev"
      type="button"
      data-bs-target="#carouselExampleControls"
      data-bs-slide="prev"
    >
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button
      class="carousel-control-next"
      type="button"
      data-bs-target="#carouselExampleControls"
      data-bs-slide="next"
    >
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

<div class="container">
  <h1 class="mt-5 text-center">Featured Products</h1>
  <div class="row">

  <?php

    $products = array ( array ( "name" => "grains", "price"  => 200, "img" => "./images/grains.jpg" ), array ( "name" => "livestock", "price"  => 30000, "img" => "./images/livestock.jpg" ), array ( "name" => "fish", "price"  => 200, "img" => "./images/fish.jpg" ),array ( "name" => "fruits", "price"  => 500, "img" => "./images/fruits.jpg" ), array ( "name" => "poultry", "price"  => 800, "img" => "./images/poultry.jpg" )   );


    foreach ( $products as $product ) {
  ?>
   

    <div class="col-12 col-sm-4">
      <div class="card mt-3">
        <img src="<?php echo $product['img']; ?>" class="card-img-top" alt="..." />
        <div class="card-body">
          <h5 class="card-title"><?php echo $product['name']; ?></h5>
          <p class="card-text">Ksh <?php echo $product['price']; ?></p>
          <a href="#" class="btn btn-primary">Add to Cart</a>
        </div>
      </div>
    </div>

    <?php

}

    ?>


  </div>
</div>

<?php 
  require_once './includes/footer.php';
?>
