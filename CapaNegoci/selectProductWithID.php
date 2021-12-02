<?php
include_once('config-db.php');
include_once("Producto.php");
$table = "productos";
$id = isset($_GET["id"]) ? $_GET["id"] : 1;

$sql = "SELECT * FROM $table where idPro='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if ($id == $row["idPro"]) {
            $producto = new Producto($row["idPro"],$row["namePro"],$row["descriptPro"],$row["pricePro"],$row["img"]);
        }
    }
}
?>