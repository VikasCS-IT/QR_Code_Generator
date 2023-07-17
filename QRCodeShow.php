<?php
$value = $_POST["name"];
include "PHPQRCode/qrlib.php";
QRcode::png($value);
?>