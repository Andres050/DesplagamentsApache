<!DOCTYPE html>
<html lang="en">
<head>
    <title>Productos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap');
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: arial;
    }
    header {
        position: absolute;
        display: flex;
        flex-wrap: nowrap;
        flex-direction: row;
        justify-content: space-between;
        top: 0;
        width: 100%;
        background: linear-gradient(white, ghostwhite);
    }
    .brand-logo {
        margin-left: 20px;
        padding: 7px 0;
    }
    .brand-logo img {
        width: 65px;
    }
    .navigation {
        margin: 0;
        text-align: center;
    }
    .navigation li {
        margin-top: 13px;
        display: inline-block;
        list-style: none;
    }
    .navigation li a {
        font-family: 'Fjalla One', sans-serif;
        margin-left: 5px;
        margin-right: 5px;
        color: black;
        padding: 2px 2px 2px 2px;
        text-decoration: none;
        font-size: 15px;
    }
    .navigation a:hover,
    .show-menu-btn:hover,
    .hide-menu-btn:hover {
        color: #C0C0C0;
    }
</style>
<body>
<header>
    <div class="brand-logo">
        <img src="/img/images.png"/>
    </div>

    <nav>
        <ul class="navigation">
            <li><a href="/home.php">Home</a></li>
            <li><a href="/llista.php">List</a></li>
            <li><a href="/counter.php">Count</a></li>
            <li><a href="/carreta.php">Cart</a></li>
            <li><a href="/login.php">Login</a></li>
        </ul>
    </nav>

    <div class="brand-logo">
        <i>Cosa</a></i>
    </div>
</header>
</body>
</html>
