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
    .tableCenter {
        text-align: center;
    }
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
</style>
<body>
<?php
include('header.php');
include("Producto.php");
$arrayProductes = array();
include "CapaNegoci/selectProductos.php";
//var_dump($arrayProductes);

$ArrProductoTra = array();
include "CapaNegoci/selectTraductions.php";
//var_dump($ArrProductoTra);

echo "<div class='tableCenter'><table align='center'><tr><th>".$lang['id']."</th><th>".$lang['name']."</th><th>".$lang['descrip']."</th><th>".$lang["price"]."</th><th>".$lang['image']."</th><th>".$lang['links']."</th></tr>";
for ($i = 0; $i < count($arrayProductes); $i++) {
    echo "<tr>";
    echo "<td>". $arrayProductes[$i]->idPro ."</td>";
    echo "<td>". $ArrProductoTra[$i]->namePro ."</td>";
    echo "<td>". $ArrProductoTra[$i]->descripPro ."</td>";
    echo "<td>". $arrayProductes[$i]->pricePro ."</td>";
    echo "<td><img src='/img/". $arrayProductes[$i]->img ."' style='height: 100px; width: 100px;'></td>";
    echo "<td><button onclick=\"window.open('/fitxa.php?id=" . $arrayProductes[$i]->idPro . "', '_self')\" type='button'>" . $lang['BuyPro'] . "</button></td>";
    echo "</tr>";
}

// AUTORIZACION PARA CREAR MAS OBJECTOS!!!
if (isset($_SESSION["user"]) && isset($_SESSION["pass"])) {
    if ($_SESSION["user"]=="admin" && $_SESSION["pass"]=="12345") {
        echo "</div><button class='footer' onclick=\"window.open('/formulari.php', '_self')\" type='button'>". $lang['addPro']."</button>";
    }
}
$conn->close();
?>
</body>
</html>