<html><head></head>
<body>
<?php
include('config-db.php');
session_start();

session_unset();

//$_SESSION["arrayItems"] = array();
?>
<script>
	window.close();
    window.open(
        '/carreta.php',
        '_self' // <- This is what makes it open in a new window.
    );
</script>
</body>
</html>
