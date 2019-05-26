<?php require_once("head.php");?>
<?php require_once("header.php");?>
<?php require_once("db-control/db-functions.php"); ?>
<div id="production" class="container h65 bg-light p-5">
  <div class="row ">
    <div class="col text-center">
      <h1>Medienos produkcija</h1>
    </div>
  </div>
  <?php $products = getProduction();
    while ($product = mysqli_fetch_assoc($products)) : ?>
    <div class="row ">
      <div class="col">
        <div class="product-pav"><h2 class=" d-inline-block"><?php echo $product["title"];?></h2><i class="fas fa-angle-left fa-2x d-inline-block"></i></div><hr class="float-none">
        <article class="product-slide">
          <p class="pr-1 float-left <?php if ($product["img"] !== "") { echo "product-p" ;} ?>"><?php echo $product["description"];?></p>
          <?php if ($product["img"] !== "") : ?>
            <img class="product-img float-left" src="img/<?php echo $product["img"];?>" alt="<?php echo $product["alt"];?>">
          <?php endif; ?>
        </article>
      </div>
    </div>
  <?php endwhile; ?>
</div>
<?php require_once("footer.php");?>
