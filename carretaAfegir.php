<html><head></head>
<body>
<?php

session_start();

if (!isset($_SESSION["arrayItems"])) {
$_SESSION["arrayItems"] = array();
}
$quantity = array(
	"quantity" => 1,
);

$hasSum = FALSE;

echo "false";
$arrayProductes = array();
include "CapaNegoci/selectProductos.php";
echo "true";

array_push($ArrProductoID,$quantity);
var_dump($ArrProductoID);

/*
if (true) {
	for ($x = 0, $size = count($_SESSION["arrayItems"]); $x < $size; $x++) {
		if ($ArrProductoID[0]==$_SESSION["arrayItems"][$x][0]) {
			$_SESSION["arrayItems"][$x]["quantity"] += 1;
			$hasSum = TRUE;
			break;
		}
	}
	if ($hasSum==FALSE) {
		array_push($_SESSION["arrayItems"],$ArrProductoID);
	}
} else {
    echo "no";
}*/

//setcookie("arrayItems", json_encode($productos));
$conn->close();
?>
</body>
</html>
