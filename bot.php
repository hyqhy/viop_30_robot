<?php
require_once '../panel/sys/php/config/loads.php';
$api = new bank_vakif('username', 'password', 'otp_pass');
$r = $api->buy_order('THYAO1!', 100000);
?>