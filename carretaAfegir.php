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

if (isset($_GET["id"])) {
    include("CapaNegoci/selectProductWithID.php");
    array_push($ArrProductoID,$quantity);
	for ($x = 0, $size = count($_SESSION["arrayItems"]); $x < $size; $x++) {
		if ($ArrProductoID[0]["idPro"]==$_SESSION["arrayItems"][$x]["idPro"]) {
			$_SESSION["arrayItems"][$x]["quantity"] += 1;
			$hasSum = TRUE;
			break;
		}
	}
	if ($hasSum==FALSE) {
		array_push($_SESSION["arrayItems"],$ArrProductoID);
	}
}

//setcookie("arrayItems", json_encode($productos));
$conn->close();
?>
<script>
        window.close();
</script>
</body>
</html>
