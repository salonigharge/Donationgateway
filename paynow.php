
<?php

$Name=$_POST['name'];
$Email=$_POST['email'];
$Phone=$_POST['telnum'];
$Amount=$_POST['amount'];
$purpose='Donation';

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:test_50e73d7b55322908f181f93f97e",
                  "X-Auth-Token:test_34226f83ae8ec3a27258514181b"));
$payload = Array(
    'purpose' => '$purpose',
    'amount' => '$Amount',
    'phone' => '$phone',
    'buyer_name' => '$Name',
    'redirect_url' => 'https://salonigharge.github.io/Donationgateway/redirect.php',
    'send_email' => true,
    'webhook' => '',
    'send_sms' => false,
    'email' => '$Email',
    'allow_repeated_payments' => false
);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 

echo $response;

?>