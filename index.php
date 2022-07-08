<?php

require 'vendor/autoload.php';

function get_profile($ln){


$url = "https://dev-sors.pantheonsite.io/api/v1/link-resolution.php?q=$ln";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
return $resp;


}
