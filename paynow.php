<?php

$Name=$_POST['name'];
$Email=$_POST['email'];
$Phone=$_POST['telnum'];
$Amount=$_POST['amount'];
$purpose='Donation';

include 'Instamojo/Instamojo.php';
$api = new Instamojo\Instamojo('test_50e73d7b55322908f181f93f97e', 'test_34226f83ae8ec3a27258514181b', 'https://test.instamojo.com/api/1.1/');

try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => $purpose,
        "amount" => $Amount,
        "send_email" => true,
        "email" => $Email,
        "buyer_name" =>$Name,
        "phone"=>$Phone,
        "send_sms" => true,
        "allow_repeated_payments" =>false,
        "redirect_url" => "https://salonigharge.github.io/Donationgateway/redirect.php"
        ));
    //print_r($response);
    $json_decode=json_decode(response,true);
    print($json_decode);
    $long_url=$json_decode['payment_request']['longurl'];
   // header("location: $long_url");
	}
	catch (Exception $e) {
	    print('Error: ' . $e->getMessage());
	}

?>