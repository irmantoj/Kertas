<?php require_once("db-functions.php");
$id = $_GET["id"];

deleteService($id);
header('Location: edit-services.php');
?>
