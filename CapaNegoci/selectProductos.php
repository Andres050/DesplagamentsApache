<?php
include_once('config-db.php');
include_once("Producto.php");
$table = "productos";

$sql = "SELECT idPro, namePro, descriptPro, pricePro, img FROM $table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        // CREO EL OBJETO PRODUCTO CON EL CONTENIDO DE CADA PRODUCTO!!!
        $producto = new Producto($row["idPro"],$row["namePro"],$row["descriptPro"],$row["pricePro"],$row["img"]);
        $ArrProducto = (array)$producto;
        $ArrProducto = array_values($ArrProducto);
        array_push($arrayProductes, $ArrProducto);
    }
}
$conn->close();
?>