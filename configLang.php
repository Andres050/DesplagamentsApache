<html><head></head>
<body>
<?php
@session_start();
include_once('arrayLenguajes.php');

if (!isset($_GET['lang'])) {
    if (!isset($_SESSION['lang'])) {
        for ($x = 0, $size = count($idioma); $x < $size; $x++) {
            if (substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2)==$idioma[$x]) {
                $_SESSION['lang'] = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
                break;
            }
            $_SESSION['lang'] = "es";
        }
        }
} else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
        if ($_GET['lang'] == "es")
            $_SESSION['lang'] = "es";
        else if ($_GET['lang']  == "en")
            $_SESSION['lang'] = "en";
        else if ($_GET['lang']  == "ge")
            $_SESSION['lang'] = "ge";
        else if ($_GET['lang']  == "ja")
            $_SESSION['lang'] = "ja";
        else if ($_GET['lang']  == "fr")
            $_SESSION['lang'] = "fr";
}



require_once "lenguajes/" . $_SESSION['lang'] . ".php";
?>
<script>
        window.close();
</script>
</body>
</html>
