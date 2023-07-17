<?php
$value = $_POST["name"];
include "PHPQRCode/qrlib.php";
QRcode::png($value,"text.png","l",10);
echo "Your QR Code downloaded on you destination path.";
?>