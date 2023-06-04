<?php

// get input
$name         = $_POST['name'];
$email        = $_POST['email'];
$current_site = $_POST['current-site'];
$subdomain    = $_POST['subdomain'];
$rules        = $_POST['rules'];
$server       = $_POST['server'];

// stick it all together


// write to end of file
$file = fopen('hosting-apps.txt', 'a');
$data = PHP_EOL .
        'name: ' .                  $name .         PHP_EOL .
		'email: ' .                 $email .        PHP_EOL .
		'current site: ' .          $current_site . PHP_EOL .
		'subdomain: ' .             $subdomain .    PHP_EOL .
		'read the rules? ' .        $rules .        PHP_EOL .
		'understand the server? ' . $server .       PHP_EOL .
		PHP_EOL .
		'***************************************';

fwrite($file, $data);