<?php
$var = $_POST['direccion'].PHP_EOL;
$content = file("/hostfile/fqdn.txt");
unset($content[intval($var)]);
file_put_contents('/hostfile/fqdn.txt', $content);
header("Location: index.php");
die();
?>
