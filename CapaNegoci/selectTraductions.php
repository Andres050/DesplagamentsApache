<?php
include_once("config-db.php");
include_once("Producto.php");
$lenguaje  = $_SESSION['lang'];
$idPro = $_GET["idPro"];

$resultado = "SELECT * FROM traducionProductos WHERE idPro = ". $arrayProductes[$i][0]. " AND nombre_idioma = '$lenguaje'";
$tra = $conn->query($resultado);
if ($resultado->num_rows > 0) {
    // output data of each row
    while($row = $resultado->fetch_assoc()) {
        // CREO EL OBJETO PRODUCTO CON EL CONTENIDO DE CADA PRODUCTO!!!
        $producto = new Producto($row["idPro"],$row["namePro"],$row["descripPro"],null,null);
        $ArrProductoTra = (array)$producto;
        $ArrProductoTra = array_values($ArrProductoTra);
        array_push($arrayProductesTraducciones,$ArrProductoTra);
        echo 2;
    }
}
?>