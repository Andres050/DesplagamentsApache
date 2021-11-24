<?php
include_once('config-db.php');
$table = "productos";
$id = isset($_GET["id"]) ? $_GET["id"] : 1;

$sql = "SELECT idPro, namePro, descriptPro, pricePro, img FROM $table where idPro='$id'";
$result = $conn->query($sql);
?>