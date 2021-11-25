<?php
session_start();
if (isset($_SESSION["user"]) && isset($_SESSION["pass"])) {
	if ($_SESSION["user"]!="admin" && $_SESSION["pass"]!="12345") {
		header("Location: https://www.botiga.cat/llista.php");
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Productos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
  <link rel="stylesheet" href="/css/headerStyle.css">
</head>
<style>
table {
        width: 100%;
        border-spacing: 10px 15px;
        border: solid #DCDCDC 2px;
        border-collapse: collapse;
        margin-bottom: 70px;
}
th, td {
        border: solid #DCDCDC 1px;
        padding: 20px;
}
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: #808080;
  color: white;
  text-align: center;
}
  .submenu{
    top: 70px;
    right: 0;
    position: fixed;
    display: none;
    width: 18%;
    background: dimgrey;
    float:inherit;
  }
  .submenu ul li{
    display: block;
    width: 100%;
  }
  li button {
    width: 100%;
    padding: 20px;
    background-color: #FFF;
  }
  .submenu nav ul button{
    display: block;
    width: 100%;
    height: inherit;
    font-size: 1.2em;
    text-align: center;
    text-decoration: none;
    line-height: 50px;
    color: #FFF;
  }
  nav ul button:hover{
    background: dimgrey;
  }
  nav ul li:hover .submenu{
    display: block;
  }
form button {
  margin-top: 10px;
  position: absolute;
  top: 50%;
  left: 45%;
  padding: 15px;
}
form {
        border: solid #808080 2px;
        text-align: center;
}
input{
        margin: 15px;
        padding: 5px;
}
</style>
<body>
<?php
include('/header.php');
include_once("ProductoInsert.php");
include('/conf/config-db.php');
$id = isset($_GET["id"]) ? $_GET["id"] : 2;
$checked = FALSE;

echo "<body>";
echo "<form>";
echo $lang['name']. ": <input type='text' name='name'><br>";
echo $lang['descrip']. ": <input type='text' name='desc'><br>";
echo $lang['price'].": <input type='number' name='price'><br>";
echo $lang['image'].": <input type='text' name='img'<br>";
echo "<br><input type='submit' name='submit' value".$lang['Send'].">";
echo "</form>";
echo "<button class='centerButton' type='button'><a href='/llista.php'/>".$lang['ReturnList']."</button>";
echo "</div></body>";

if (isset($_GET['name']) && isset($_GET['desc']) && isset($_GET['price']) && isset($_GET['img']))  {
    $producto = new ProductoInsert($_GET['name'],$_GET['desc'],$_GET['price'],$_GET['img']);
    $ArrProducto = (array)$producto;
    $ArrProducto = array_values($ArrProducto);
    $checked = TRUE;
}

if ($checked === TRUE) {
//$sql = "INSERT INTO $table (namePro, descriptPro, pricePro, img) values ($_GET['name'],$_GET['desc'], $_GET['price'],'newimg.png')";
    include($_SERVER['DOCUMENT_ROOT'].'/CapaNegoci/insertIntoProducto.php');
}
?>
</body>
</html>
