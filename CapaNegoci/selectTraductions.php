<?php
include_once("config-db.php");
include_once("Producto.php");
$lenguaje  = $_SESSION['lang'];

$resultado = "SELECT * FROM traducionProductos WHERE idPro = '". $arrayProductes[$i][0] . "' AND nombre_idioma = '$lenguaje'";
$tra = $conn->query($resultado);
//echo $resultado;
if ($tra->num_rows > 0) {
    // output data of each row
    while($row = $tra->fetch_assoc()) {
        echo $row;
        echo $row["idPro"];
        echo $row["namePro"];
        echo $row["descripPro"];
        echo 1;
        // CREO EL OBJETO PRODUCTO CON EL CONTENIDO DE CADA PRODUCTO!!!
        $ArrProductoTra = array($row["idPro"],$row["namePro"],$row["descripPro"]);
        $ArrProductoTra = array_values($ArrProductoTra);
    }
}
?>