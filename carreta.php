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
table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        margin-top: 35px;
}
td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
}
.delRight {
        background-color: rgb(255,0,0,0.5);
        text-align: center;
}
.delRightButton {
        background-color: rgb(255,0,0,0.3);
}
</style>
<body>
<?php
include('/header.php');
include('/conf/config-db.php');
$id = isset($_GET["id"]) ? $_GET["id"] : 1;

echo "<table><tr><th>". $lang['id'] . "</th><th>". $lang['name']. "</th><th>".$lang['descrip']."</th><th>". $lang['price']."</th><th>".$lang['quantity']."</th><th>". $lang['option']. "</th></tr>";
$sumatotal = 0;

if (isset($_SESSION["arrayItems"])) {
	for ($i = 0, $size = count($_SESSION["arrayItems"]); $i < $size; $i++) {
		echo "<tr><td>" . $_SESSION["arrayItems"][$i]["idPro"] . "</td><td>" .$_SESSION["arrayItems"][$i]["namePro"]. "</td><td>". $_SESSION["arrayItems"][$i]["descriptPro"]. "</td><td>" . $_SESSION["arrayItems"][$i]["pricePro"] ."</td><td>". $_SESSION['arrayItems'][$i]['quantity']."</td><td class='delRight'><button class='delRightButton' onclick=\"window.open('/conf/carretaEliminar.php?id=". $_SESSION["arrayItems"][$i]["idPro"]. "', '_blank'); setTimeout(function(){location.reload()},500);\" type='button'>".$lang['delete']."</button></td>";
		$sumatotal += $_SESSION["arrayItems"][$i]["pricePro"]*$_SESSION["arrayItems"][$i]["quantity"];
	}
}

echo "<tr><td></td><td><strong>".$lang['sumTotal']."</strong></td><td></td><td><strong>". $sumatotal. " $<strong></td><td></td></tr>";
echo "</table></div></body>";
echo "<div style='text-align:center'><button style='padding: 15px; margin-top: 50px' onclick=\"window.open('/conf/carretaEliminarTodo.php','_blank'); setTimeout(function(){location.reload()},1000);\" type='button'>".$lang['buy']."</button></div>";
$conn->close();
?>
</body>
</html>
