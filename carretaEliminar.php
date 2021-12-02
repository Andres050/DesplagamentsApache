<html><head></head>
<body>
<?php
include_once("Producto.php");
include('config-db.php');
$id = isset($_GET["id"]) ? $_GET["id"] : 1;

session_start();

if (!isset($_SESSION["arrayItems"])) {
	$_SESSION["arrayItems"] = array();
}


$newArray = array();

for ($x = 0, $size = count($_SESSION["arrayItems"]); $x < $size; $x++) {
	if ($_SESSION["arrayItems"][$x]->idPro==$id) {
		array_push($newArray,$_SESSION["arrayItems"][$x]);
	}
}
$_SESSION["arrayItems"] = $newArray;

//setcookie("arrayItems", json_encode($productos));
$conn->close();
?>
<script>
        window.close();
</script>
</body>
</html>
