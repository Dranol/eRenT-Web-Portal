<?php
session_start();

	include ("connection.php");
	include ("functions.php");


	if (isset($_POST['submit']))
	{
		$registeredNumber = $_POST['regNum'];
		$newNumber = $_POST['otherNum'];
		$amount = $_POST['amount'];
		

		#call mpesa stk push function

		$response = mpesaStkpush($registeredNumber, $newNumber, $amount);

		if ($response == 0)
		{
			header("Location:Tenant.php?error=Please Enter Correct details");
		}
		else{

			header("Location:Tenant.php?error=Please Enter Your");
		}

	}
?>