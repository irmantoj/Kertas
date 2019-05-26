<?php require_once("db-functions.php");
$id = $_GET["id"];
$img =  $_GET["img"];
$img2 =  $_GET["img2"];
$alt =  $_GET["alt"];

updateGallery($id ,$img, $img2, $alt);
header('Location: edit-gallery.php');
?>
