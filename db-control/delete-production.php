<?php require_once("db-functions.php");
$id = $_GET["id"];

deleteProduction($id);
header('Location: edit-production.php');
?>
