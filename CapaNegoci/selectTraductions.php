<?php
include_once("config-db.php");
include_once("Producto.php");
$table = "traducionProductos";
$lenguaje  = $_SESSION['lang'];

$resultado = "SELECT nombre_idioma , idPro , namePro , descripPro FROM $table";
$tra = $conn->query($resultado);

echo $resultado;
if ($tra->num_rows > 0) {
    while($row = $tra->fetch_assoc()) {
        // CREO EL OBJETO PRODUCTO CON EL CONTENIDO DE CADA PRODUCTO!!!
        $producto = new Producto($row["idPro"],$row["namePro"],$row["descripPro"],null,null);
        $ArrProductoTra = (array)$producto;
        $ArrProductoTra = array_values($ArrProductoTra);
    }
}
?>