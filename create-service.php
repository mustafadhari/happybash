<?php
require __DIR__.'/vendor/autoload.php';

use Twilio\Rest\Client;

$sid = getenv("TWILIO_SID");
$token = getenv("TWILIO_AUTH_TOKEN");
$twilio = new Client($sid, $token);

$service = $twilio->verify->v2->services
                              ->create("My First Verify Service");

print($service->sid);
?>