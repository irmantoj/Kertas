<?php require_once("checkLogin.php");?>
<?php require_once("head.php");?>
<?php require_once("header.php");?>
<?php require_once("db-functions.php"); ?>
<div id="production" class="container bg-light p-5">
  <div class="row ">
    <div class="col text-center">
      <h1>Paslaugos</h1>
    </div>
  </div>
  <?php $services = getServices();
    while ($service = mysqli_fetch_assoc($services)) : ?>
    <div class="row ">
      <div class="col">
        <h2 class="d-inline"><?php echo $service["title"];?></h2> <a class="btn btn-info mx-3" href="updating-service.php?id=<?php echo $service["id"];?>">Naujinti</a> <a class="btn btn-danger mx-3" href="delete-service.php?id=<?php echo $service["id"];?>">Trinti</a>
        <article class="d-flex flex-wrap">
          <p class="product-p pr-5"><?php echo $service["description"];?></p><hr>
          <img class="product-img" src="../img/<?php echo $service["img"];?>" alt="<?php echo $service["alt"];?>">
        </article><hr>
      </div>
    </div>
  <?php endwhile; ?>
  <div class="row ">
    <div class="col">
      <article class="">
        <form class="" action="insert-service.php" method="get">
          <input class="mb-2" type="text" name="title" value="" placeholder="pavadinimas"><br>
          <textarea class="mb-2" name="description" rows="8" cols="80" placeholder="aprasymas"></textarea><br>
          <input class="mb-2" type="text" name="img" value="" placeholder="nuotrauka">
          <input class="mb-2" type="text" name="alt" value="" placeholder="alternatyvus tekstas">
          <button class="mx-2 btn btn-info" type="submit" name="button">Prideti nauja paslauga</button>
        </form>
      </article><hr>
    </div>
  </div>
</div>
<?php require_once("footer.php");?>
