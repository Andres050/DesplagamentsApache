<?php
$ncookie = 1;

if (isset($_COOKIE['andres'])) {
        $ncookie = json_decode($_COOKIE['andres']);
}

$ncookie++;
setcookie('andres', $ncookie);
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
button {
	padding: 15px;
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
#counter {
        text-align: center;
        font-size: 100px;
        padding-top: 250px;
}
</style>
<body>
<?php
include('/header.php');
$csession = 'contadorSession';
$nsession = 0;

if(isset($_SESSION[$csession])) {
   $nsession = $_SESSION[$csession];
}

$nsession++;

$_SESSION[$csession] = $nsession;
$ncookie = 1;

if (isset($_COOKIE["andres"])) {
	$ncookie = json_decode($_COOKIE['andres']);
}
echo "<p id='counter'>Session: " . $_SESSION[$csession] . "</p>";
echo "<p id='counter'>Cookie: " . $ncookie . "</p>";
?>
<button onclick="history.back(-1)"><?php echo $lang['Return']?></button>
</body>
</html>
