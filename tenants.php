<?php
session_start();

	include ("connection.php");
	include ("functions.php");

	$user_data = check_login($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tenant Resources</title>
	<link rel="stylesheet" type="text/css" href="tenants.css">
</head>
<body>
	<!-- Navigation Section -->
	<div class="container">
		<div class="navigation">
			<ul>
				<li>
					<a href="*">
						<span class="icon"><ion-icon name="business-outline"></ion-icon></span>
						<span class="title">HOUSE NUMBER :</span>
						<br>
						<span class="title"><?php echo $user_data['id']; ?></span>
					</a>
				</li>

				<li>
					<a href=".paySection">
						<span class="icon"><ion-icon name="card-outline"></ion-icon></span>
						<span class="title">MAKE PAYMENTS</span>
					</a>
				</li>

				<li>
					<a href=".recenTransactions">
						<span class="icon"><ion-icon name="albums-outline"></ion-icon></span>
						<span class="title">TRANSACTIONS</span>
					</a>
				</li>

				<li>
					<a href="*">
						<span class="icon"><ion-icon name="chatbubble-ellipses-outline"></ion-icon></span>
						<span class="title">COMMENTS</span>
					</a>
				</li>

				<li>
					<a href="#">
						<span class="icon"><ion-icon name="help-circle-outline"></ion-icon></span>
						<span class="title">HELP</span>
					</a>
				</li>

				<li>
					<a href="logout.php">
						<span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
						<span class="title">LOGOUT</span>
					</a>
				</li>

			</ul>
		</div>

		<!--Main-->
		<div class="main">
			<div class="topbar">
				<div class="toggle"><ion-icon name="menu-outline"></ion-icon></div>
				<div class="search">
					<label>
						<input type="text" placeholder="Search here">
						<ion-icon name="search-outline"></ion-icon>
					</label>
				</div>
				<div class="search">
                    <h2 class="search">   
                    	<strong>
                        <?php
                        echo " Welcome , " . $user_data['user_name'];
                        ?>
                        <ion-icon name="hand-left-outline"></ion-icon>
                        </strong>
        	            </h2>
				</div>
				<div class="user"><img src="drck.png.jpg" alt="userIcon.png"></div>
			</div>

			<!--Cards-->
			<div class="cardBox">

				<div class="card">
					<div>
						<div class="iconBox"><ion-icon name="call-outline"></ion-icon></div>
					</div>

					
						<div class="cardName">Phone Number:
							<div class="numbers">
								<h2 >
	                        		<?php
	                       				 echo $user_data['user_id'];
	                       			?>
	                    		</h2>
							</div>
						</div>
					

					<br>
					<hr>
					<div>
						<div class="iconBox"><ion-icon name="alert-outline"></ion-icon></div>
					</div>

					<div>
						<div class="cardName">Arrears:</div><br><br>
						<div class="numbers">kshs 500</div>
					</div>
				
				</div>

				<div class="card">
					<div>
						<div class="iconBox"><ion-icon name="earth"></ion-icon></div>
					</div>

					<div>
						<div class="cardName">Unit Location:</div><br><br>
						<div class="numbers">Ngara</div>
					</div>
				</div>

				<div class="card">
					<div>
						<div class="iconBox"><ion-icon name="logo-bitcoin"></ion-icon></div>
					</div>

					<div>
						<div class="cardName">Unit Price:</div><br><br>
						<div class="numbers">kshs 5000</div>
					</div>
				</div>
			</div>
				<!---Payment Section-->
				<div class="details">
					<div class="paySection">
						<form class="depositForm" action="action.php" method="POST">
						<div class="cardHeader">
							Make Payments :-
						</div>

						<div class="otherNo">
							<input class="radio" type="radio" id="givenNumber" name="numberIdentity" value="$user_data['user_id']" checked>
							<span>
							<label for="givenNumber" >
								Use Your Registered Number:
								<?php
                       			echo $user_data['user_id'];
                       			?>
							</label>
							</span>
						</div>

						<div class="otherNo">
							<input class="radio" type="radio" id="otherNum" name="numberIdentity" value="otherNum">
							<label for="otherNum">
								Use Another Number:
								<input class="otherTxbx" type="text" placeholder="Enter Other Number Here" name="otherNum">
							</label>
						</div>

						<div class="otherNo">
							<label><br>
								<hr>
								Enter Amount to Deposit : 
								<input class="amountTxbx" type="text" name="deposit" placeholder="Enter Your Amount Here {kshs}">
							</label>
							<br><br>
							<input id="button" name="button" type="submit" value="DEPOSIT"><br><br><br><hr>
						</form>
							<h3>
								Or Deposit Using  USSD *334#<br>
								Till Number: 8740526<br>
								
								1. Go to Mpesa Menu.<br>
								2. Click on Lipa na Mpesa.<br>
								3. Select Buy Goods and Services.<br>
								4. Enter Till Number: 8740526.<br>
								5. Enter The Amount You wish to Deposit.<br>
							    6. Enter Your Mpesa Pin And Confirm the request.<br>
								7. You Will shortly receive an SMS from Mpesa confirming the transaction.<br>
								
							</h3>
						</div>
					</div>
				</div>

				<!---Recent Transactions-->
				
				
				<div class="recenTransactions">
					<div class="cardHeader">
						<h2>Recent Transactions</h2>
					</div>


					<table>
						<thead>
							<tr>
								<td>Transaction Id</td>
								<td>Amount</td>
								<td>Date</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<h4>
								<td>SCM1U5UQMD</td>
								<td><span>100</span></td>
								<td><span>8/04/2024</span></td>
								</h4>
							</tr>

							<tr>
								<td>SCM1U5UQMD</td>
								<td><span>100</span></td>
								<td><span>8/04/2024</span></td>
							</tr>

							<tr>
								<td>SCM1U5UQMD</td>
								<td><span>5000</span></td>
								<td><span>8/04/2024</span></td>
							</tr>

							<tr>
								<td>SCM1U5UQMD</td>
								<td><span>5000</span></td>
								<td><span>01/04/2024</span></td>
							</tr>

							<tr>
								<td>SCM1U5UQMD</td>
								<td><span>2000</span></td>
								<td><span>8/04/2024</span></td>
							</tr>

							<tr>
								<td>SCM1U5UQMD</td>
								<td><span>3000</span></td>
								<td><span>8/04/2024</span></td>
							</tr>

							<tr>
								<td>SCM1U5UQMD</td>
								<td><span>7000</span></td>
								<td><span>8/04/2024</span></td>
							</tr>

							<tr>
								<td>SCM1U5UQMD</td>
								<td><span>4000</span></td>
								<td><span>8/04/2024</span></td>
							</tr>

							<tr>
								<td>SCM1U5UQMD</td>
								<td>100</td>
								<td><span>8/04/2024</span></td>
							</tr>

							<tr>
								<td>SCM1U5UQMD</td>
								<td><span>3000</span></td>
								<td><span>8/04/2024</span></td>
							</tr>

							<tr>
								<td>SCM1U5UQMD</td>
								<td><span>1000</span></td>
								<td><span>18/04/2024</span></td>
							</tr>

							<tr>
								<td>SCM1U5UQMD</td>
								<td><span>900</span></td>
								<td>28/04/2024</td>
							</tr>

							<tr>
								<td>SCM1U5UQMD</td>
								<td><span>990</span></td>
								<td><span>30/04/2024</span></td>
							</tr>

							

						</tbody>
					</table>	
				</div>

		

<script type="text/javascript" src="tenants.js"></script>

<!-- icons framework scripts -->

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>


</html>