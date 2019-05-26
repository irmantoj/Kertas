<?php require_once("db-functions.php");

$title = $_GET["title"];
$description = $_GET["description"];
$img = $_GET["img"];
$alt = $_GET["alt"];

insertService($title, $description, $img, $alt);
header('Location: edit-services.php');
?>
