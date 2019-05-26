<?php require_once("head.php");?>
<?php require_once("header.php");?>
<div class="container bg-light p-3">
  <!-- <div class="row">
    <div class="col text-center">
      <h1 class="mb-4 mt-4">Galerija</h1>
    </div>
  </div> -->
  <div class="row">
    <?php require_once("db-control/db-functions.php");
      $pics = getGalleryPics();
    ?>
    <?php while ($pic = mysqli_fetch_assoc($pics)) : ?>
      <a href="img/<?php echo $pic["img2"]?>" data-toggle="lightbox" data-gallery="gallery" class="col-md-4 mb-3">
        <img src="img/<?php echo $pic["img"]?>" class="img-fluid rounded" alt="<?php echo $pic["alt"]?>">
      </a>
    <?php endwhile; ?>
  </div>
</div>
<?php require_once("footer.php");?>
