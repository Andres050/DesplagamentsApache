<?php
include_once('config-db.php');
$table = "productos";
$id = isset($_GET["id"]) ? $_GET["id"] : 1;
echo "true";

$sql = "SELECT * FROM $table where idPro='$id'";
$result = $conn->query($sql);
echo "true";
if ($result->num_rows > 0) {
    echo "true";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if ($id == $row["idPro"]) {
            $producto = new Producto($row["idPro"],$row["namePro"],$row["descriptPro"],$row["pricePro"],$row["img"]);
            $ArrProductoID = (array)$producto;
            $ArrProductoID = array_values($ArrProductoID);
        }
    }
}
echo "true";
?>