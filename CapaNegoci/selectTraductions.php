<?php
include_once("config-db.php");
$lenguaje  = $_SESSION['lang'];
$idPro = $row["idPro"];

$resultado = "SELECT * FROM traducionProductos WHERE idPro = $idPro AND nombre_idioma = '$lenguaje'";
$tra = $conn->query($resultado);
?>