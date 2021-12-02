<?php
include_once("config-db.php");
include_once("Producto.php");
$lenguaje  = $_SESSION['lang'];
$table = "traducionProductos";

$resultado = "SELECT * FROM $table WHERE idPro = '". $arrayProductes[$i][0] . "'";
$tra = $conn->query($resultado);

if ($tra->num_rows > 0) {
    // output data of each row
    while($row = $tra->fetch_assoc()) {
        // CREO EL OBJETO PRODUCTO CON EL CONTENIDO DE CADA PRODUCTO!!!
        $producto = array($row["idPro"],$row["namePro"],$row["descripPro"]);
        array_merge($ArrProductoTra, $producto);
    }
}
?>