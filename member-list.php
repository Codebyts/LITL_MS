<?php
	require('validation.php');

	include('database.php');
	$conn = mysqli_connect($host, $user, $paswoord, $database);

	//Charts
	if (!$conn) {
		echo 'Failed to connect to the database';
	} else {
		

		$sections_sql = "SELECT DISTINCT `section` FROM `member_list` ORDER BY `section` ASC;";
		$sections_result = mysqli_query($conn, $sections_sql);
		while($row = mysqli_fetch_array($sections_result)) {
			$sections[] = $row['section'];
		}
		$sections_count = count($sections);


		$member_filter = $_GET['section'];

		if(isset($_GET['section'])) {
			$members_list_sql = "SELECT * FROM `member_list` WHERE `section`='$member_filter' ORDER BY `name` ASC;";
			$members_list_result = mysqli_query($conn, $members_list_sql);
			while($row = mysqli_fetch_array($members_list_result)) {
				$name[] = $row['name'];
				$student_number[] = $row['student_number'];
				$mem_fee_status[] = $row['mem_fee_status'];
			}
		
			$members_list_count = count($name);
		} else {
			$members_list_sql = "SELECT * FROM `member_list` WHERE `section`='1-1' ORDER BY `name` ASC;";
			$members_list_result = mysqli_query($conn, $members_list_sql);
			while($row = mysqli_fetch_array($members_list_result)) {
				$name[] = $row['name'];
				$student_number[] = $row['student_number'];
				$mem_fee_status[] = $row['mem_fee_status'];
			}
		
			$members_list_count = count($name);
		}
		
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/member-list-style.css">
	<link rel="stylesheet" href="style/nav-side.css">
	<link rel="stylesheet" href="style/popup-style.css">
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

			<form method="post" action="member-list-filter.php">
				<label for="section"> Section: </label>
				<select id="section" name="section">
					<?php
						$i = 0;
						while($i<=($sections_count-1)){
							echo $sections[$i];

							if($sections[$i]==$_GET['section']) {
								?>
								<option value="<?php echo $sections[$i]?>" selected> BSIT <?php echo $sections[$i] ?> </option>
							<?php } else { ?> 
								<option value="<?php echo $sections[$i]?>"> BSIT <?php echo $sections[$i] ?> </option> 
							<?php }
							$i++;
						}
					?>
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
					<?php
					$i = 0;
					while($i<=($members_list_count-1)) {
						?> <tr> 
							<td class="name"> <?php echo $name[$i]; ?> </td>
							<td> <?php echo $student_number[$i]; ?> </td>
							<td> 
								<?php if($mem_fee_status[$i]=="paid") { ?>
									 <input type="checkbox" name="payment-status" checked disabled>
								<?php } else { ?>
									 <input type="checkbox" name="payment-status" disabled>
								<?php } ?>
							</td>
						<?php $i++; ?> 
						</tr> 
					<?php } ?>
				</table>
			</form>
			<button onclick="showFrame()" class="btn">update</button>

			<div class="popup-overlay" id="overlay" onclick="closeFrame()"></div>
		    <div class="popup-frame" id="popupFrame">
		        <iframe src="update-status.php"></iframe>
		    </div>
		</main>
	</section>
	</div>

	<script src="script/nav.js"></script>
	<script src="script/popup-script.js"></script>
</body>
</html>