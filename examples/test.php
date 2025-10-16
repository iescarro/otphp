<?php

require_once __DIR__ . '/../vendor/autoload.php';

$totp = new \OTPHP\TOTP("base32secret3232");
echo $totp->now(); // => 334937

// OTP verified for current time
echo $totp->verify(18539) ? 'True' : 'False'; // => true
//30s later
echo $totp->verify(18539) ? 'True' : 'False'; // => false
