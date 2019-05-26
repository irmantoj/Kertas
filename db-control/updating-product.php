<?php require_once("db-functions.php");
  $id=$_GET["id"];
  $product = getProduct($id);
?>

<form class="" action="update-product.php" method="get"><br>
  <input type="hidden" name="id" value="<?php echo $id?>" ><br>
  <input type="text" name="title" value="<?php echo $product["title"] ?>" placeholder="pavadinimas"><br>
  <textarea name="description" rows="8" cols="80" placeholder="aprasymas"><?php echo $product["description"] ?></textarea><br>
  <input type="text" name="img" value="<?php echo $product["img"] ?>" placeholder="nuotrauka"><br>
  <input type="text" name="alt" value="<?php echo $product["alt"] ?>">
  <button type="submit" name="button">Naujinti</button>
</form>
