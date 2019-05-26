<?php require_once("db-functions.php");
  $id=$_GET["id"];
  $service = getService($id);
?>

<form class="" action="update-service.php" method="get"><br>
  <input type="hidden" name="id" value="<?php echo $id?>" ><br>
  <input type="text" name="title" value="<?php echo $service["title"] ?>" placeholder="pavadinimas"><br>
  <textarea name="description" rows="8" cols="80" placeholder="aprasymas"><?php echo $service["description"] ?></textarea><br>
  <input type="text" name="img" value="<?php echo $service["img"] ?>" placeholder="nuotrauka"><br>
  <input type="text" name="alt" value="<?php echo $service["alt"] ?>" placeholder="nuotrauka"><br>
  <button type="submit" name="button">Naujinti</button>
</form>
