<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $room_id = $_POST['room_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];
    $card_number = $_POST['card_number'];  // Not used in this example
    $expiry_month = $_POST['expiry_month'];  // Not used in this example
    $expiry_year = $_POST['expiry_year'];  // Not used in this example
    $cvv = $_POST['cvv'];  // Not used in this example

    // Calculate total amount
    $room = $conn->query("SELECT * FROM rooms WHERE id = $room_id")->fetch_assoc();
    $price_per_night = $room['price'];
    $check_in_date = new DateTime($check_in);
    $check_out_date = new DateTime($check_out);
    $interval = $check_in_date->diff($check_out_date);
    $total_days = $interval->days;
    $total_amount = $total_days * $price_per_night;

    // Prepare PayGate parameters
    $paygate_id = 'YOUR_PAYGATE_ID';
    $encryption_key = 'YOUR_ENCRYPTION_KEY';
    $reference = 'KWL' . time(); // Unique reference
    $amount = $total_amount * 100; // Amount in cents
    $currency = 'NAD';

    $data = array(
        'PAYGATE_ID' => $paygate_id,
        'REFERENCE' => $reference,
        'AMOUNT' => $amount,
        'CURRENCY' => $currency,
        'RETURN_URL' => 'https://yourdomain.com/return.php',
        'TRANSACTION_DATE' => date('Y-m-d H:i:s'),
        'LOCALE' => 'en',
        'COUNTRY' => 'NAM',
        'EMAIL' => $email,
    );

    ksort($data);

    $data_str = '';
    foreach ($data as $key => $value) {
        $data_str .= $key . '=' . urlencode($value) . '&';
    }
    $data_str = rtrim($data_str, '&');
    $checksum = md5($data_str . $encryption_key);

    // Redirect to PayGate
    $url = 'https://secure.paygate.co.za/payweb3/process.trans';
    $form = '<form id="paygate_form" action="' . $url . '" method="POST">';
    foreach ($data as $key => $value) {
        $form .= '<input type="hidden" name="' . $key . '" value="' . htmlspecialchars($value) . '">';
    }
    $form .= '<input type="hidden" name="CHECKSUM" value="' . $checksum . '">';
    $form .= '</form>';
    $form .= '<script>document.getElementById("paygate_form").submit();</script>';
    echo $form;
}
?>
