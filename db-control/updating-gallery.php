<?php require_once("db-functions.php");
  $id=$_GET["id"];
  $pic = getGalleryPic($id);
?>

<form class="" action="update-gallery.php" method="get"><br>
  <input type="hidden" name="id" value="<?php echo $id?>" ><br>
  <input type="text" name="img" value="<?php echo $pic["img"] ?>" placeholder="galerijos foto"><br>
  <input type="text" name="img2" value="<?php echo $pic["img2"] ?>" placeholder="paspaudus galerijoje foto"><br>
  <input type="text" name="alt" value="<?php echo $pic["alt"] ?>" placeholder="alternatyvus tekstas"><br>
  <button type="submit" name="button">Naujinti</button>
</form>
