<?php
session_start();

	include ("connection.php");
	include ("functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		// POSTED
		// id represents the house number of a tenant.
		//User id represents the users' mpesa number,designation differenciates between admin & tenant. 


			$id = $_POST['id'];  //This is the users house number
			$user_id = $_POST['user_id']; //users' phone number{mpesa}
			$user_name = $_POST['user_name'];
			$designation = $_POST['designation']; //whether a user is an admin{1} or a tenant{2}
			$password = $_POST['password'];


			if (!empty($user_name) && !empty($id) && !empty($password) && !empty($user_id) && !is_numeric($user_name))
			{
				//saves
				
				$query = "insert into users(id,user_id,user_name,designation,password) values('$id','$user_id','$user_name','$designation','$password')";
				mysqli_query($conn, $query);

				header("Location: login.php");
				die;
			}


			else
			{
				echo "Please Enter Valid information";
			}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tenant Addition</title>
</head>
<body>
	<style type="text/css">
		body{
			margin-top: 40px;
			background-color:white;
			background-image: url(eRenTLogoo.png);
			background-repeat: no-repeat;
			background-size: 100% 700px;
			background-position: center;

		}

		#text{
			font-family: sans-serif;
			font-variant-caps: all-small-caps;
			height: 30px;
			border-radius: 5px;
			padding: 9spx;
			border: solid thin blue;
			width: 100%;
			background-color: white;
		}

		#button{
			padding: 10px;
			font-variant-caps: all-small-caps;
			margin-left: 30%;
			width: 30%;
			border-radius: 6px;
			color: blue;
			background-color: white;
			border: solid thin blue;
			align-items: center;
		}

		#box{
			background-color:dimgrey;
			font-variant-caps: all-small-caps;
			margin: auto;
			width: 300px;
			padding: 20px;
			align-content: center;
			align-items: centers;
			justify-content: center;
			margin-top: 5%;
		}
	</style>
	<div id="box">
		
		<form method="post">
			<div style="
						font-size: 23px;
						margin: 10px;
						color: limegreen;
						width: 100%;
						padding-left: 30%;
						padding-bottom: 10px;
						align-items: center;
			">Add New Tenant</div>
			<input id="text" type="text" name="id" placeholder="House Number"><br><br>
			<input id="text" type="text" name="user_id" placeholder="Phone number 07.."><br><br>
			<input id="text" type="text" name="user_name"  placeholder="Username"><br><br>
			<label style = "
						font-size: 23px;
						margin-bottom: 40px;
						padding-bottom: 10px;
						color: limegreen;
						width: 100%;
						align-items: center;
						 ">Designation : </label><br>
			
				<select id="text"  name="designation">
					<option value="1">Admin</option>
					<option value="2">Tenant</option>
				</select><br><br>
				<input id="text"type="password" name="password" placeholder="Password *******">
				<br><br>

			
			<input id="button" type="submit" value="Add"><br><br>

			<a style="
						color: limegreen;
						font-family: cursive;
						text-decoration: none;
						font-size: 15px;
			" href="login.php">Already have an Account? Login here</a>
		</form>
	</div>
</body>
</html>