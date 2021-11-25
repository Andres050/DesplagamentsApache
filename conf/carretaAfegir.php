<html><head></head>
<body>
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/CapaNegoci/selectProductWithID.php');

session_start();

if (!isset($_SESSION["arrayItems"])) {
$_SESSION["arrayItems"] = array();
}
$quantity = array(
	"quantity" => 1,
);

$hasSum = FALSE;

if (isset($_GET["id"])) {
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
	$row=array_merge($row,$quantity);
	for ($x = 0, $size = count($_SESSION["arrayItems"]); $x < $size; $x++) {
		if ($row["idPro"]==$_SESSION["arrayItems"][$x]["idPro"]) {
			$_SESSION["arrayItems"][$x]["quantity"] += 1;
			$hasSum = TRUE;
			break;
		}
	}
	if ($hasSum==FALSE) {
		array_push($_SESSION["arrayItems"],$row);
		break;
	}
    }
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
