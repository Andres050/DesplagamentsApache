<!DOCTYPE html>
<html lang="en">
<head>
  <title>Productos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
  <link rel="stylesheet" href="headerStyle.css">
  <link rel="stylesheet" href="login.css">
</head>
<style>
button {
        padding: 25px;
}
.tableCenter {
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
include('config-db.php');

echo "<div class='login'>";
echo "<h1>". $lang['Login']."</h1>";
echo "<form>";
echo "<input type='text' name='u' placeholder=". $lang['username']. " required='required'/>";
echo "<input type='text' name='p' placeholder=". $lang['password']." required='required'/>";
echo "<button type='submit' class='btn btn-block'>".$lang['Log']."</button>";
echo "</form>";

$id = isset($_GET["id"]) ? $_GET["id"] : 2;
$checked = FALSE;

if (isset($_GET['u']) && isset($_GET['p']))  {
        $user = $_GET['u'];
        $pass = $_GET['p'];
        $checked = TRUE;
}

if ($checked === TRUE) {
	$_SESSION["user"] = $user;
	$_SESSION["pass"] = $pass;
	echo "<p style='color: green; text-align:center; margin-top: 30px;'>".$lang['logfor']. " ".$user." ".$lang['created']."</p>";
}
?>
</body>
</html>
