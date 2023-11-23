<?php
require_once 'loads.php';
$api = new bank_vakif('username', 'password', 'otp_pass');
$r = $api->buy_order('THYAO1!', 100000);
?>
