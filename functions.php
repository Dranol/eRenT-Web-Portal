<?php
date_default_timezone_set('Africa/Nairobi');
function check_login($conn)
{

	if(isset($_SESSION['user_id']))

	{
		$user_id = $_SESSION['user_id'];
		$query = " select * from users where user_id = '$user_id' limit 1";

		$result = mysqli_query($conn, $query);

		if ($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	if(isset($_SESSION['user_name']))

	{
		$user_name = $_SESSION['user_name'];
		$query = " select * from users where user_name = '$user_name' limit 1";

		$result = mysqli_query($conn, $query);

		if ($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	if(isset($_SESSION['id']))

	{
		$id = $_SESSION['id'];
		$query = " select * from users where id = '$id' limit 1";

		$result = mysqli_query($conn, $query);

		if ($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}
	//Redirection to login if not
	header("Location: login.php");
	die;
}


function mpesaStkPush($registeredNumber, $newNumber, $amount, $id)
{
	
	#callback url
	define('CALLBACK_URL', 'https://examle.co.ke/include/callback_url.php');

	$consumerKey = 'wX5j5AyAml2xreg2FuXfoF3SrREdAnilso9FGppN1y7aM1T4';
	$consumerSecret = 'yoVAhn4IFEN4ILM1OAbGQp0lttGnoI73nSM4YavGGyVPArK6t8hXwz65sTDrlD3J';

	$BusinessShortCode = '6480328';
	$Passkey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';
	$phone = preg_replace('^0/','254',str_replace("+", replace, subject));
	$PartyA = '+254729297540';
	$PartyB = '8740526';
	$amnt = '';
	$TransactionDescr = 'Rent Payment';
	$times = date(d/m/Y);
	$Pazzword = base64_encode($BusinessShortCode.$Passkey.$times);
	$headers = ['Content-Type:application/json; charset'];

	$access_token_url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
	$initiate_url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';

	$curl = curl_init($access_token_url);
	curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt($curl, CURLOPT_HEADER, FALSE);
	curl_setopt($curl, CURLOPT_USERPWD, $consumerKey. ';'.$consumerSecret);

	$result = curl_exec($curl);
	$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
	$result = json_decode($result);
	$access_token = $result->access_token;

	curl_close($curl);

	#Header For STK Push
	$stkheader = ['Content-Type:application/json','Authorization:Bearer '.$access_token];

	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $initiate_url);
	curl_setopt($curl, CURLOPT_HTTPHEADER, $stkheader);# Setting Custom Header.

	$curl_post_data = array(
		'BusinessShortCode'=> $BusinessShortCode,'Pazzword'=> $Pazzword,'times'=> $times,
		'TransactionType'=>'CustomerBuyGoodsOnline','amount'=>'$amount',
		'PartyA' => $PartyA, 'PartyB'=>'$PartyB','PhoneNumber'=>$PartyA, 
		'callback_url'=>CALLBACK_URL . $id, 'AccountReference'=>$ordernum, 
		'TransactionDescr'=>$TransactionDescr
	);

	$data_string = json_encode($curl_post_data);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_POST, true);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
	$curl_response = curl_exec($curl);

	$res = (array)(json_decode($curl_response));
	$ResponseCode = $res['ResponseCode'];
	return $ResponseCode;
}
?>
