<?php require_once("head.php");?>
<?php require_once("header.php");?>
<?php require_once("db-control/db-functions.php"); ?>
<div id="production" class="container h65 bg-light p-5">
  <div class="row ">
    <div class="col text-center">
      <h1>Paslaugos</h1>
    </div>
  </div>
  <?php $services = getServices();
    while ($service = mysqli_fetch_assoc($services)) : ?>
    <div class="row">
      <div class="col">
        <div class="product-pav"><h2 class="d-inline-block"><?php echo $service["title"];?></h2><i class="fas fa-angle-left fa-2x d-inline-block"></i><hr class="float-none"></div>
        <article class="product-slide">
          <p class="pr-1 float-left <?php if ($service["img"] !== "") { echo "product-p" ;} ?>"><?php echo $service["description"];?></p>
          <?php if ($service["img"] !== "") : ?>
            <img class="product-img float-left" src="img/<?php echo $service["img"];?>" alt="<?php echo $service["alt"];?>">
          <?php endif; ?>
        </article>
      </div>
    </div>
  <?php endwhile; ?>
</div>
<?php require_once("footer.php");?>
