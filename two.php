<?php
include "phpqrcode/phpqrcode.php";
$value="http://192.168.137.1/seven/index.html";
$errorCorrectionLevel = "L";
$matrixPointSize = "15";
QRcode::png($value,false,$errorCorrectionLevel,$matrixPointSize);
?>