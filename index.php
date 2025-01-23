<?php 
session_start();

	include ("connection.php");
	include ("functions.php");

	$user_data = check_login($conn);
	
?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>My Website</title>
 	<link rel="stylesheet" type="text/css" href="style1.css">

 </head>
 <body>

 	<!--**Navigation**-->
 	<div class="container">
 		<div class="navigation">
 			<ul>
 				<li>
 					<a href="#">
 						<span class="icon"><ion-icon name="business-sharp"></ion-icon></span>
 						<span class="title">RCK APARTMENTS</span>
 					</a>
 				</li>

 				<li>
 					<a href="#">
 						<span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
 						<span class="title">HOME</span>
 					</a>
 				</li>

 				<li>
 					<a href="signup.php">
 						<span class="icon"><ion-icon name="duplicate"></ion-icon></span>
 						<span class="title">NEW TENANT</span>
 					</a>
 				</li>

 				<li>
 					<a href="#">
 						<span class="icon"><ion-icon name="wallet-outline"></ion-icon></ion-icon></span>
 						<span class="title">CHECK PAYMENTS</span>
 					</a>
 				</li>

 				<li>
 					<a href="#">
 						<span class="icon"><ion-icon name="chatbubbles-outline"></ion-icon></span>
 						<span class="title">MESSAGES</span>
 					</a>
 				</li>

 				<li>
 					<a href="#">
 						<span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
 						<span class="title">SETTINGS</span>
 					</a>
 				</li>

 				<li>
 					<a href="#">
 						<span class="icon"><ion-icon name="help-outline"></ion-icon></span>
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

 		<!--MAIN-->
 		<div class="main">
 			<div class="topbar">
 				<div class="toggle">
 					<ion-icon name="menu-outline"></ion-icon>
 				</div>

 				<div class="search">
 					<label>
 						<input type="text" placeholder="Search Here">
 						<ion-icon name="search-circle-outline"></ion-icon>
 					</label>
 				</div>


		<div class="search">
                    <h2 class="search">   
                    	<strong>
                        <?php
                        echo " Welcome , " .$user_data['user_name'];
                        ?>
                        <ion-icon name="hand-left-outline"></ion-icon>
                        </strong>
                    </h2>
		</div>


 				<div class="user">
 					<img src="userIcon.png" alt="">
 				</div>
 			</div>

 			<!-- CARDS -->

 			<div class="cardBox">
 				<div class="card">
 					<div>
	 					<div class="cardName">Total Number of Housing Units :</div>
	 					<div class="numbers">15</div>
	 				</div>

 					<div class="iconBox">
 						<ion-icon name="podium-sharp"></ion-icon>
 					</div>
 				</div>

 				<div class="card">
 					<div>
	 					<div class="cardName">Number of Payments Last Two Weeks :</div>
	 					<div class="numbers">12</div>
 					</div>
 				
 					<div class="iconBox">
 						<ion-icon name="card-outline"></ion-icon>
 					</div>
 				</div>

 				<div class="card">
 					<div>
 						<div class="cardName">Total Earnings Past 20 days:</div>
	 					<div class="numbers">12800</div>
	 				</div>	
 				
 					<div class="iconBox">
 						<ion-icon name="briefcase-outline"></ion-icon>
 					</div>
 				</div>

 				<div class="card">
 					<div>
	 					<div class="cardName">Comments/Complaints/Queries Past Month :</div>
	 					<div class="numbers">4</div>
 				   	</div>
 					<div class="iconBox">
 						<ion-icon name="chatbox-ellipses-outline"></ion-icon>
 					</div>
				</div>

				<div class="card">
 					<div>
 						<div class="cardName">Vacant Apartments As at Last Five days:</div>
	 					<div class="numbers">4</div>
 				   	</div>
 					<div class="iconBox">
 						<ion-icon name="radio-button-off-outline"></ion-icon>
 					</div>
				</div>

				<div class="card">
 					<div>
	 					<div class="cardName">Number of Occupied Apartments :</div>
	 					<div class="numbers">4</div>
 				   	</div>
 					<div class="iconBox">
 						<ion-icon name="radio-button-on-outline"></ion-icon>
 					</div>
				</div>

				<div class="card">
 					<div>
	 					<div class="cardName">Do Rounds</div>
	 					<div class="numbers">****</div>
 				   	</div>
 					<div class="iconBox">
 						<ion-icon name="walk-outline"></ion-icon>
 					</div>
				</div>

				<div class="card">
 					<div>
	 					<div class="cardName">Add New Tenant(s)</div>
	 					<div class="numbers">***</div>
 				   	</div>
 					<div class="iconBox">
 						<ion-icon name="add-circle-sharp"></ion-icon>
 					</div>
				</div>

				<div class="card">
 					<div>
	 					<div class="cardName">My Notes/Special Comments</div>
	 					<div class="numbers">.,.,?</div>
 				   	</div>
 					<div class="iconBox">
 						<ion-icon name="pencil-outline"></ion-icon>
 					</div>
				</div>
 		</div>

		<!--Recents-->
		<div class="recents">
			<div class="recTransaction">
				<div class="cardHeader">
					<h2><u>Recent Transactions</u></h2>
					<a href="#" class="bton">View All</a>
				</div>

				<table>
					<thead>
						<tr>
							<td>Names</td>
							<td>Unit Price</td>
							<td>Unit Number</td>
							<td>Arrears</td>
						<td>Status</td>
						</tr>
					</thead>

					<tbody>
						<tr>
							<td>First Entry</td>
							<td>kshs5000</td>
							<td>G01</td>
							<td>YES</td>
							<td><span class="statusPaid">Paid</span></td>
						</tr>

						<tr>
							<td>Second Entry</td>
							<td>kshs11000</td>
							<td>G04</td>
							<td>NONE</td>
							<td><span class="statusPaid">Paid</span></td>
						</tr>

						<tr>
							<td>Derrick Mudavadi</td>
							<td>kshs1000</td>
							<td>F06</td>
							<td>NONE</td>
							<td><span class="statusNotPaid">Not Paid</span></td>
						</tr>

						<tr>
							<td>John Doe</td>
							<td>kshs25000</td>
							<td>G03</td>
							<td>YES</td>
							<td><span class="statusPaid">Due</span></td>
						</tr>

						<tr>
							<td>Jane Doe</td>
							<td>kshs5000</td>
							<td>S02</td>
							<td>YES</td>
							<td><span class="statusOverdue">Overdue</span></td>
						</tr>

						<tr>
							<td>Meshack Ndombi</td>
							<td>kshs55000</td>
							<td>S01</td>
							<td>NONE</td>
							<td><span class="statusPaid">Paid</span></td>
						</tr>

						<tr>
							<td>Ancient One</td>
							<td>kshs15000</td>
							<td>S05</td>
							<td>YES</td>
							<td><span class="statusNotPaid">Not Paid</span></td>
						</tr>

						<tr>
							<td>Peter Tingle</td>
							<td>kshs10000</td>
							<td>T03</td>
							<td>YES</td>
							<td><span class="statusPaid">Paid</span></td>
						</tr>
					</tbody>
				</table>
			</div>

			<div class="performTens">
				<div class="cardHeader">
					<h2><u>Perfoming Tenants</u></h2>
				</div>

				<table>
					<thead>
						<tr>
							<td>Profile</td>
							<td>Name</td>
							<td>Unit Number</td>
						</tr>
					</thead>
					<tbody>
					<tr>
						<td><div class="imgbx"><img src="eRenTLogoo.png" alt=""></div></td>
						<td><h4>Richards <br></h4></td>
						<td> <span>T10</span></td>
					</tr>

					<tr>
						<td><div class="imgbx"><img src="userIcon.png" alt=""></div></td>
						<td><h4>Meshack <br></h4></td>
						<td><span>S01</span></td>
					</tr>
					<tr>
						<td><div class="imgbx"><img src="shakame.jpg" alt=""></div></td>
						<td><h4>Derrick <br></h4></td>
						<td><span>F06</span></td>
					</tr>

					<tr>
						<td><div class="imgbx"><img src="drck.png.jpg" alt=""></div></td>
						<td><h4>Ancient One <br></h4></td>
						<td><span>F06</span></td>
					</tr>

					<tr>
						<td><div class="imgbx"><img src="wbstpic.webp" alt=""></div></td>
						<td><h4>Regina Phalange </h4></td>
						<td><span>T02</span></td>
					</tr>

					<tr>
						<td><div class="imgbx"><img src="drck.png.jpg" alt=""></div></td>
						<td><h4>Ken Adams <br></h4></td>
						<td><span>G07</span></td>
					</tr>

					<tr>
						<td><div class="imgbx"><img src="eRenTLogoo.png" alt=""></div></td>
						<td><h4>Wambilianga <br></h4></td>
						<td><span>S07</span></td>
					</tr>
				</tbody>
				</table>

			</div>
		</div>
 	</div>	
 	
 	<!--Script used-->

 	<script src="script1.js"></script>

	<!--icons link-->
 	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

 </body>
 </html>
