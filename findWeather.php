<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.darksky.net/forecast/33f04cae19d269f690b892deaa90f918/37.8267,-122.4233",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => "",
));

$response = curl_exec($curl);
$response = json_decode($response, true);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {

$currentClimate = $response['currently']['icon'];
  echo 'The current climate icon is saying its: ' . $currentClimate;
  echo "\n";
}