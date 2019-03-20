<?php

require "predis/autoload.php";
Predis\Autoloader::register();

$redis = new Predis\Client(array(
    "scheme" => "tcp",
    "host" => "hostname",
    "port" => port,
    "password” => “password"));
echo "Connected to Redis";