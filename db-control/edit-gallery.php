<?php require_once("checkLogin.php");?>
<?php require_once("head.php");?>
<?php require_once("header.php");?>
<div class="container bg-light p-3">
  <div class="row">
    <div class="col text-center">
      <h1 class="mb-4">Galerija</h1>
    </div>
  </div>
  <div class="row">
    <?php require_once("db-functions.php");
      $pics = getGalleryPics();
    ?>
    <?php while ($pic = mysqli_fetch_assoc($pics)) : ?>
      <a href="../img/<?php echo $pic["img2"]?>" data-toggle="lightbox" data-gallery="gallery" class="col-md-4 mb-3">
        <img src="../img/<?php echo $pic["img"]?>" class="img-fluid rounded" alt="<?php echo $pic["alt"]?>">
      </a><a class="btn btn-info mx-1 h-25" href="updating-gallery.php?id=<?php echo $pic["id"]?>">Naujinti</a><a class="btn btn-danger mx-1 h-25" href="delete-gallery.php?id=<?php echo $pic["id"]?>">Trinti</a>
    <?php endwhile; ?>
  </div>
  <div class="row">
    <div class="col">
      <form class="" action="insert-gallery.php" method="get">
        <input class="my-2 w-50" type="text" name="img" value="" placeholder="galerijos foto"><br>
        <input class="my-2 w-50" type="text" name="img2" value="" placeholder="paspaudus galerijoje foto"><br>
        <input class="my-2 w-50" type="text" name="alt" value="" placeholder="alternatyvus tekstas"><br>
        <button class="btn btn-info" type="submit" name="button">Prideti</button>
      </form>
    </div>
  </div>
</div>
<?php require_once("footer.php");?>
