<?php
	require('validation.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/help-desk-style.css">
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
				<li><a href="dashboard.php">DASHBOARD</a></li>

				<li><a href="member-list.php"></i> MEMBER LIST</a></li>

				<li><a href="officer.php">OFFICERS</a></li>

				<li><a href="help-desk.php" class="active">HELP DESK</a></li>
			</ul>
		</aside>
			<!-- SIDEBAR -->

			<section id="content">
		<nav>
			<H1>HELP DESK</H1>
			<!--Profile-->
			<span class="divider"></span>
			<div class="profile">
				<img src="src/LITL-Logo.png" alt="">
				<ul class="profile-link">
					
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
		</nav>
			
		<!-- Main -->
		<main>
		<div class="form-container">
			<h2>Concern Form</h2>
			<form action="#" method="post">
				<label for="name">Name:</label>
				<input type="text" id="name" name="name" required>

				<label for="studentnumber">Student Number:</label>
				<input type="text" id="studentnumber" name="studentnumber" required>

				<label for="concern">Concern:</label>
				<textarea id="concern" name="concern" rows="4" required></textarea>

				<input type="submit" value="SUBMIT">
			</form>
    	</div>
		</main>
	</section>
	</div>

	<script src="script/nav.js"></script>
</body>
</html>