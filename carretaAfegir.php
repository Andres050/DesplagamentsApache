<html><head></head>
<body>
<?php
include("Producto.php");

session_start();

if (!isset($_SESSION["arrayItems"])) {
$_SESSION["arrayItems"] = array();
}
$_SESSION["arrayItems"] = array();

$hasSum = FALSE;

if (isset($_GET["id"])) {
    $arrayProductes = array();
    include "CapaNegoci/selectProductWithID.php";

	for ($x = 0, $size = count($_SESSION["arrayItems"]); $x < $size; $x++) {
		if ($productoID->idPro==$_SESSION["arrayItems"][$x]->idPro) {
			$_SESSION["arrayItems"][$x]->quantity += 1;
			$hasSum = TRUE;
			break;
		}
	}
	if ($hasSum==false) {
		array_push($_SESSION["arrayItems"],$productoID);
	}
}

//setcookie("arrayItems", json_encode($productos));
$conn->close();
?>
</body>
</html>
