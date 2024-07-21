<?php
require 'vendor/autoload.php';

$mollie = new \Mollie\Api\MollieApiClient();
$mollie->setApiKey('test_Avt5e6RDfA3htE6gwv6Bw4Pu5EsaCs');

$payment = $mollie->payments->get($_POST['id']);

if ($payment->isPaid()) {
    // Payment was successful
    // Process the payment and update your database
} else {
    // Payment failed or still pending
    // Handle the appropriate action based on the payment status
}