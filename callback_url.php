<?php

include "functions.php";
include "connection.php";

$invoice = $_GET['orderid'];

$callbackJSONData=file_get_contents('php://input');

$logFile = "stkPush.json";
$log = fopen($logFile, "a");
fwrite($log, $callbackJSONData.$orderid);
fclose($log);

$callbackData=json_decode($callbackData);

$resultCode=$callbackData->Body->stkCallback->ResultCode;
$resultDesc=$callbackData->Body->stkCallback->ResultDesc;
$merchantRequestID=$callbackData->Body->stkCallback->MerchantRequestID;
$checkOutrequestID=$callbackData->Body->stkCallback->CheckOutrequestID;
$pesa=$=$callbackData->Body->CallbackMetadata->Pesa;
$amount=$callbackData->Body->CallbackMetadat->Amount;
$mpesareceiptNumber=$callbackData->Body->stkCallback->CallbackMetadata->MpesareceiptNumber;
$transactionDate=$callbackData->Body->stkCallback->CallbackMetadata->TransactionDate;
$phoneNumber=$callbackData->Body->stkCallback->CallbackMetadata->PhoneNumber;

$orderid = strval($orderid);
$amount = strval($amount);

if ($resultCode == 0)
{
	$conn = null;
}

?>