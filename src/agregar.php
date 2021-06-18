<?php
$var = $_POST['direccion'].PHP_EOL;
file_put_contents("fqdn.txt", $var, FILE_APPEND);
header("Location: index.php");
die();
?>
