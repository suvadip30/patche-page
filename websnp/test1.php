<?php
$field1 = $_GET["hostname"];
$field2 = $_GET["username"];
$field3 = $_GET["command"];

$proc = popen("df -h", 'r');
while (!feof($proc))
{
    echo "[".date("i:s")."] ".fread($proc, 4096).'<br>';flush();ob_flush();
}

?>
