<html><head></head>
<body>
<?php
include_once("Producto.php");

session_start();

if (!isset($_SESSION["arrayItems"])) {
$_SESSION["arrayItems"] = array();
}

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

$conn->close();
?>
<script>
    window.close();
</script>
</body>
</html>
