<?php
include_once('config-db.php');
$table = "productos";

$sql = "SELECT idPro, namePro, descriptPro, pricePro, img FROM $table";
$result = $conn->query($sql);
?>