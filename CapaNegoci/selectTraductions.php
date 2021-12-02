<?php
include_once("config-db.php");
include_once("Producto.php");
$lenguaje  = $_SESSION['lang'];
$table = "traducionProductos";

$result = "SELECT * FROM $table WHERE nombre_idioma = '$lenguaje'";
$tra = $conn->query($result);


if ($tra->num_rows > 0) {
    // output data of each row
    while($row = $tra->fetch_assoc()) {
        // CREO EL OBJETO PRODUCTO CON EL CONTENIDO DE CADA PRODUCTO!!!
        $producto = new Producto($row["idPro"],$row["namePro"],$row["descripPro"],null, null);
        array_push($ArrProductoTra, $producto);
    }
}
?>