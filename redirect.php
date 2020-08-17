<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fundraising 2020-Thankyou page!</title>
        <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap-social.css"> 
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/slick-theme.css">
</head>

  <body>
    <div class="container">

      <div class="page-header">
        
        <p class="lead" style=color:blue>Fundraising 2020- Thankyou For Your Donation!</p>
      </div>

      <strong><h3 style="color:#6da552"></h3> </strong>
   
    <p> Thank you for supporting Charity work with your generous regular donations. Your valuable gift is helping us provide long-term support to girls and poor people.
</p>
<p>Note : Check Your Email For Transection Detail</p>
 <?php

include 'Instamojo/Instamojo.php';

$api = new Instamojo\Instamojo('test_50e73d7b55322908f181f93f97e', 'test_34226f83ae8ec3a27258514181b','https://test.instamojo.com/api/1.1/');

$payid = $_GET["payment_request_id"];


try {
    $response = $api->paymentRequestStatus($payid);


    echo "<h4>Payment ID: " . $response['payments'][0]['payment_id'] . "</h4>" ;
    echo "<h4>Payment Email: " . $response['payments'][0]['amount'] . "</h4>";
    echo "<h4>Payment Name: " . $response['payments'][0]['buyer_name'] . "</h4>" ;
    echo "<h4>Payment Email: " . $response['payments'][0]['buyer_email'] . "</h4>" ;
    

  echo "<pre>";
   print_r($response);
echo "</pre>";
    ?>


    <?php
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}



  ?>
      
    </div> <!-- /container -->

 <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>