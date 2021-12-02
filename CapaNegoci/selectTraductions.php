<?php
include_once("config-db.php");
include_once("Producto.php");
$lenguaje  = $_SESSION['lang'];

$resultadoTraducion = "SELECT * FROM traducionProductos";
$tra = $conn->query($resultadoTraducion);
echo $resultadoTraducion;
echo $tra;
if ($tra->num_rows > 0) {
    // output data of each row
    while($row = $tra->fetch_assoc()) {
        // CREO EL OBJETO PRODUCTO CON EL CONTENIDO DE CADA PRODUCTO!!!
        $ArrProductoTra = array($row["idPro"],$row["namePro"],$row["descripPro"]);
        $ArrProductoTra = array_values($ArrProductoTra);
    }
}
?>