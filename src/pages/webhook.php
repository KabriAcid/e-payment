<?php
require '../../config/config.php';

$secretHash = 'FLWSECK_TEST-3b3b4';

$requestBody = file_get_contents('php://input');
$signature = $_SERVER['HTTP_VERIF_HASH'];

if (!$signature) {
    // Only a post with Flutterwave signature header gets our attention
    exit('No signature header');
}

// validate event do all at once to avoid timing attack
if ($signature !== $secretHash) {
    // silently forget this ever happened
    exit('Invalid signature');
}

$event = json_decode($requestBody);
if ($event->event === 'charge.completed' && $event->data->status === 'successful') {
    // Handle successful payment event
    $transactionId = $event->data->id;
    $amount = $event->data->amount;
    $currency = $event->data->currency;
    $customerEmail = $event->data->customer->email;

    // Insert transaction data
    $sql = "INSERT INTO transactions (transaction_id, amount, currency, customer_email, status) VALUES ('$transactionId', '$amount', '$currency', '$customerEmail', 'paid')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    http_response_code(200); // Respond with HTTP status 200 to acknowledge receipt of the webhook
} else {
    // Handle other events, or ignore
    http_response_code(400); // Respond with HTTP status 400 for invalid or unhandled events
}
