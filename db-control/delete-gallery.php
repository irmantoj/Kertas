<?php require_once("db-functions.php");
$id = $_GET["id"];

deleteGallery($id);
header('Location: edit-gallery.php');
?>
