<?php

//Prepend a base path if Predis is not available in your "include_path".
require 'Predis/Autoload.php';

Predis\Autoloader::register();

$client = new Predis\Client();
$client->set('foo', 'bar');
$value = $client->get('foo');