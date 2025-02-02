<?php
	require('validation.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/member-list-style.css">
	<link rel="stylesheet" href="style/nav-side.css">
</head>
<body>
	<div class="container">
		<!-- SIDEBAR -->
		<aside id="sidebar">
			<a href="#" class="brand">
				<img src="src/LITL-Logo.png" alt="" width="100px" height="80px" class="brand-logo"><br>
                    <span class="brand-name">LITL Management System</span>
			</a>
			<ul class="side-menu">
				<li><a href="dashboard.php" >DASHBOARD</a></li>

				<li><a href="member-list.php" class="active"></i> MEMBER LIST</a></li>

				<li><a href="officer.php">OFFICERS</a></li>

				<li><a href="help-desk.php">HELP DESK</a></li>
			</ul>
		</aside>
			<!-- SIDEBAR -->

			<section id="content">
		<nav>
			<H1>EDFGHAHJWEVBFGHWAEVFWAVE</H1>
			<!--Profile-->
			<span class="divider"></span>
			<div class="profile">
				<img src="src/LITL-Logo.png" alt="">
				<ul class="profile-link">
					<li><a href="logout.php"><i class="fas fa-solid fa-arrow-right-from-bracket"></i> Logout</a></li>
				</ul>
			</div>
		</nav>
			
		<!-- Main -->
		<main>
			<form action="">
				<label for="section"> Section: </label>
				<select id="section" name="section">
					<option value="volvo"> BSIT 1-1 </option>
					<option value="saab"> BSIT 1-2 </option>
					<option value="fiat"> BSIT 2-1 </option>
					<option value="audi"> BSIT 2-2 </option>
				</select>
				<input type="submit" value="Filter">
			</form>
			<form>
				<table> 
					<tr>
						<th> Name </th>
						<th> Student Number </th>
						<th> Membership Fee Status </th>
					</tr>
					<tr>
						<td class="name"> Rheymark Regencia </td>
						<td> 12345678 </td>
						<td> 
							<input type="checkbox" name="payment-status" checked>
						</td>
					</tr>
					<tr>
						<td class="name"> John Doe </td>
						<td> 12345678 </td>
						<td> 
							<input type="checkbox" name="payment-status">
						</td>
					</tr>
					<tr>
						<td class="name"> John Doe </td>
						<td> 12345678 </td>
						<td> 
							<input type="checkbox" name="payment-status" checked>
						</td>
					</tr>
				</table>
				<input type="submit" value="Save Changes">
			</form>
		</main>
	</section>
	</div>

	<script src="script/nav.js"></script>
</body>
</html>