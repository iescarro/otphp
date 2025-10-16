<?php

require_once __DIR__ . '/../vendor/autoload.php';

$secret_key = 'SECRET';
$totp = new \OTPHP\TOTP($secret_key, array('interval' => 43200));
$currentCode = $totp->now();
echo $currentCode;
