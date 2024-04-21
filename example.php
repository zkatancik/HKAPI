<?php

// Include the autoloader. This is default composer,
// so you don't have to deal with it when using HKAPI as a library.
$loader = require __DIR__ . '/vendor/autoload.php';

// It's as easy as it can get. Just enter the IP and you're done.
// Of course, there are other options as well, such as a specific
// port or your device type.
$hk = new \HKAPI\API('192.168.1.242', 10025, new \HKAPI\Devices\AVR());

// echo "Let's get started by turning on the main zone.\n";
// $hk->zone('Main Zone')->on();
// // Note that some devices shut down the API server after some time.
// // More information about that on the README.md.

$sleepTime = 2;

// sleep(5);

echo "Okay, how about some CD?\n";
$hk->zone('Main Zone')->selectSource('Disc');

sleep($sleepTime);

echo "Sounds good! Louder!\n";
$hk->zone('Main Zone')->volumeUp();

sleep($sleepTime);

echo "Ooo, records?\n";
$hk->zone('Main Zone')->selectSource('Phono');

sleep($sleepTime);

echo "Back to TV\n";
$hk->zone('Main Zone')->selectSource('TV');

sleep($sleepTime);

// echo "Sleep tight!\n";
// $hk->zone('Main Zone')->off();
// You might not be able to turn your device back on again,
// consider using the sleep() command instead.

//sleep($sleepTime);

echo "Oh, and in case you're missing some output...\n";
var_dump($hk->zone('Main Zone')->heartAlive());