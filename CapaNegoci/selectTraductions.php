<?php
include_once("config-db.php");
include_once("Producto.php");
$lenguaje  = $_SESSION['lang'];
$idPro = $row["idPro"];

$resultado = "SELECT * FROM traducionProductos WHERE idPro = $idPro AND nombre_idioma = '$lenguaje'";
$tra = $conn->query($resultado);
if ($resultado->num_rows > 0) {
    // output data of each row
    while($row = $resultado->fetch_assoc()) {
        // CREO EL OBJETO PRODUCTO CON EL CONTENIDO DE CADA PRODUCTO!!!
        $producto = array($row["idPro"],$row["namePro"],$row["descripPro"]);
        $producto = array_values($producto);
        array_push($arrayProductesTraducciones, $producto);
    }
}
?>