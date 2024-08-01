<?php
$paygate_id = 'YOUR_PAYGATE_ID';
$encryption_key = 'YOUR_ENCRYPTION_KEY';

$response_data = $_POST;
$checksum = $response_data['CHECKSUM'];
unset($response_data['CHECKSUM']);

ksort($response_data);

$response_data_str = '';
foreach ($response_data as $key => $value) {
    $response_data_str .= $key . '=' . urlencode($value) . '&';
}
$response_data_str = rtrim($response_data_str, '&');
$calculated_checksum = md5($response_data_str . $encryption_key);

if ($checksum == $calculated_checksum) {
    // Check if payment was successful
    if ($response_data['TRANSACTION_STATUS'] == '1') {
        // Payment successful, handle the booking confirmation
        // Store the booking details in your database
        echo 'Payment successful. Your booking is confirmed.';
    } else {
        // Payment failed, handle the error
        echo 'Payment failed: ' . htmlspecialchars($response_data['RESULT_DESC']);
    }
} else {
    echo 'Checksum validation failed.';
}
?>
