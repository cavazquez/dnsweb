<?php
$var = $_POST['direccion'].PHP_EOL;
$content = file("fqdn.txt");
unset($content[intval($var)]);
file_put_contents('fqdn.txt', $content);
header("Location: index.php");
die();
?>
