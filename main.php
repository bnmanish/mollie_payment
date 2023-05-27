<?php
require 'vendor/autoload.php';

$mollie = new \Mollie\Api\MollieApiClient();
$mollie->setApiKey('test_Avt5e6RDfA3htE6gwv6Bw4Pu5EsaCs');

$payment = $mollie->payments->create([
    "amount" => [
        "currency" => "EUR",
        "value" => "10.00"
    ],
    "description" => "Payment for order #12345",
    "redirectUrl" => "https://example.com/return",
    "webhookUrl" => "https://example.com/webhook"
]);


header("Location: ".$payment->getCheckoutUrl());