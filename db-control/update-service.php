<?php require_once("db-functions.php");
$id = $_GET["id"];
$title = $_GET["title"];
$description = $_GET["description"];
$img = $_GET["img"];
$alt = $_GET["alt"];
updateService($id ,$title, $description, $img, $alt);
header('Location: edit-services.php');
?>
