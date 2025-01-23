<?php
session_start();

	include ("connection.php");
	include ("functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//POSTED
			$user_id = $_POST['user_id'];
			$user_name = $_POST['user_name'];
			$designation = $_POST['designation'];
			$password = $_POST['password'];


			if (!empty($user_name) && !empty($password) && !empty($user_id) && !is_numeric($user_name) && !empty($designation))
			{
				//reads from database
				$query = "select * from users where user_name = '$user_name' and user_id='$user_id' and designation = '$designation' limit 1";
				$result = mysqli_query($conn, $query);

				if ($result)
				{
					if ($result && mysqli_num_rows($result) > 0)
					{
						$user_data = mysqli_fetch_assoc($result);

							if ($user_name == $_POST['user_name'])
							{
								$_SESSION['user_name'] = $user_name; 
        						header('Location: index.php?user_name='.$user_name);
        					}
					        //Switch case statement to differentiate an admin from a tenant and take the to their respective dashboards.
							switch ($designation) {
								case '1':
									$_SESSION['designation'] = $designation; 
					        		header('Location: index.php');
									break;
								case '2':
									$_SESSION['designation'] = $designation; 
					        		header('Location: tenants.php');
									break;
								
								default:
									$_SESSION['designation'] = $designation; 
					        		header('Location: tenants.php');
									break;
							}
							echo '<script> alert("Invalid information Check and try again!")</script';
					}
			else{
				echo '<script> alert("Invalid information Entered Please Check Your Details and Try Again!!")</script>';
				}
	}
}

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<style type="text/css">

		body{
			margin-top: 20px;
			background-color:ghostwhite;
		/*	background-image: url(eRenTLogoo.png);  */
			background-repeat: no-repeat;
			background-size: 100% 700px;
			background-position: center;

		}
		
		#text{
			height: 30px;
			border-radius: 5px;
			padding: 5px;
			border: solid thin blue;
			width: 95%;
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
			background-color:whitesmoke;
			margin: auto;
			width: 500px;
			padding: 20px;
			align-content: center;
			align-items: center;
			border: solid thin darkblue;
			border-radius: 6px;
		}
	</style>
	<div id="box">
		
		<form method="post">
			<div style="
						font-size: 25px;
						margin: 10px;
						color: darkblue;
						width: 100%;
						padding-left: 30%;
						padding-bottom: 10px;
						align-items: center;
			">Login</div>
			<input id="text" type="text" name="user_name" placeholder="Username"><br><br>
			<input id="text" type="text" name="user_id" placeholder="Phone Number"><br><br>
			<input id="text"type="password" name="password" placeholder=" Password *******"><br><br>
			<label 

				style= "font-size: 23px;
						margin-bottom: 40px;
						padding-bottom: 10px;
						color: darkblue;
						width: 80%;
						align-items: center;">login as: 
			</label><br><br>
			<select id="text"  name="designation">
				<option value="1">Admin</option>
				<option value="2">Tenant</option>
			</select>
			<br><br>
			<input id="button" type="submit" value="Login"><br><br>

			<a style="
						color: darkblue;
						font-family: cursive;
						text-decoration: none;
						font-size: 17px;
						padding-left: 25%;
			"href="signup.php">Click here to signup</a>
		</form>
	</div>
</body>
</html>