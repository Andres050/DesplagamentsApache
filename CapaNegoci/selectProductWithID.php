<?php
include_once('config-db.php');
$table = "productos";
$id = isset($_GET["id"]) ? $_GET["id"] : 1;

$sql = "SELECT * FROM $table where idPro='$id'";
echo $sql;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if ($id == $row["idPro"]) {
            echo "ESTEFANIA!!!!!!!";
            $producto = new Producto($row["idPro"],$row["namePro"],$row["descriptPro"],$row["pricePro"],$row["img"]);
            echo "ESTEFANIA!!!!!!!";
            var_dump($producto);
            echo "ESTEFANIA!!!!!!!";
            $ArrProductoID = (array)$producto;
            $ArrProductoID = array_values($ArrProductoID);
            var_dump($ArrProductoID);
        }
    }
}
?>