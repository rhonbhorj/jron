<?php



// Include the qrlib file
include 'phpqrcode/qrlib.php';
$file ='uplod/';
// $text variable has data for QR
$text = "LOVE YOU LET";


QRcode::png($text);
