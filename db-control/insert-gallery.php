<?php require_once("db-functions.php");

$img = $_GET["img"];
$img2 = $_GET["img2"];
$alt = $_GET["alt"];

insertGallery($img, $img2, $alt);
header('Location: edit-gallery.php');
?>
