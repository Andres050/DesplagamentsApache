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
button {
        padding: 25px;
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
.productos {
    margin-left: 30px;
    font-size: 20px;
    padding: 10px;
}
img, img.center {
  width: 500px;
    display: block;
    margin: 0 auto;
}
button.center {
    display: block;
    margin: 0 auto;
}
</style>
<body>
<?php
include('header.php');
include("Producto.php");

include("CapaNegoci/selectProductWithID.php");
//var_dump($ArrProductoID);

$ArrProductoTra = array();
include "CapaNegoci/selectTraductions.php";

var_dump($productoID);

echo "<div class='productos'><img class='center' src=/img/". $productoID->img . ">"; include($_SERVER['DOCUMENT_ROOT'].'/CapaNegoci/selectTraductions.php');
//echo var_dump($ArrProductoTra);

for ($x = 0; $x < count($ArrProductoTra); $x++) {
    if ($productoID->idPro===$ArrProductoTra[$x]->idPro) {
        echo
            "<p><strong>".$lang['name']."</strong>" .$ArrProductoTra[$x]->namePro. "</p>".
            "<p><strong>".$lang['descrip']."</strong>" .$ArrProductoTra[$x]->descripPro. "</p>";
        break;
    }
}
echo "<p><strong>".$lang['price'].":</strong> ". $productoID->pricePro . "</p>";
echo "<button onclick=\"window.open('/carretaAfegir.php?id=". $productoID->idPro. "', '_blank')\" type='button'>".$lang['BuyPro']."</button></div>";

echo "<button class='center' onclick=\"window.open('/carreta.php','_self')\">".$lang['GoShop']."</button>";
$conn->close();
?>
</body>
</html>
