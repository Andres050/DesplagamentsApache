<html><head></head>
<body>
<?php

session_start();

if (!isset($_SESSION["arrayItems"])) {
$_SESSION["arrayItems"] = array();
}

$hasSum = FALSE;

if (isset($_GET["id"])) {
    $arrayProductes = array();
    include "CapaNegoci/selectProductWithID.php";

    array_push($ArrProductoID,1);

	for ($x = 0, $size = count($_SESSION["arrayItems"]); $x < $size; $x++) {
		if ($ArrProductoID[0]==$_SESSION["arrayItems"][$x][0]) {
			$_SESSION["arrayItems"][$x][5] += 1;
			$hasSum = TRUE;
			break;
		}
	}
	if ($hasSum==false) {
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
