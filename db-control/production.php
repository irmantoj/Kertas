<?php require_once("head.php");?>
<?php require_once("header.php");?>
<?php require_once("db-valdymas/db-functions.php"); ?>
<div id="production" class="container bg-light p-5">
  <div class="row ">
    <div class="col text-center">
      <h1>Medienos produkcija</h1>
    </div>
  </div>
  <?php $products = getProduction();
    while ($product = mysqli_fetch_assoc($products)) : ?>
    <div class="row ">
      <div class="col">
        <h2><?php echo $product["title"];?></h2>
        <article class="d-flex flex-wrap">
          <p class="product-p pr-5"><?php echo $product["description"];?></p><hr>
          <img class="product-img" src="img/dailylentes.jpg" alt="">
        </article><hr>
      </div>
    </div>
  <?php endwhile; ?>
</div>
<?php require_once("footer.php");?>
