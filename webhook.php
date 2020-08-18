<?php
require_once 'pdo.php';
require 'connet.php';
 $data= $_POST ;
 $payment_id=$data['payment_id'];
 $payment_request_id=$data['payment_request_id'];
 mysql_query("INSERT INTO webhook ('imojo_id','payment_id','status') VALUES ('$payment_id','payment_request_id','')");

   $sql="INSERT INTO webhook ('imojo_id','payment_id','status') VALUES (:im,:pr,:st)";
   $stmt=$pdo->prepare($sql);
   $stmt->execute(array(":im" =>$payment_id,":pr"=>$payment_request_id,":st"=>''));
?>