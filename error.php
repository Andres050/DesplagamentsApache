<!DOCTYPE html>
<html lang="en">
<head>
  <title>Productos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
  <link rel="stylesheet" href="/headerStyle.css">
<style>
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
</head>
<body>
<?php
include('header.php');
include('config-db.php');
?>
<section style="padding-top: 300px">
  <h1 style="text-align: center; font-size: 100px">Pagina Personalizada Error 404</h1>
  <hr>
  <p style="margin-left: 100px; padding-top: 30px">Este es la descripcion del error y tal</p>
</section>
</body>
</html>
