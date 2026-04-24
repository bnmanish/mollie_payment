<?php
require 'vendor/autoload.php';

$mollie = new \Mollie\Api\MollieApiClient();
$apikey = ""; // Add your api key here
$mollie->setApiKey($apikey);

$payment = $mollie->payments->get($_POST['id']);

if ($payment->isPaid()) {
    // Payment was successful
    // Process the payment and update your database
} else {
    // Payment failed or still pending
    // Handle the appropriate action based on the payment status
}