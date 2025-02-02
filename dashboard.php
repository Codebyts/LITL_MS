<?php
	require('validation.php');

	include('database.php');
	$conn = mysqli_connect($host, $user, $paswoord, $database);

	//Charts
	if (!$conn) {
		echo 'Failed to connect to the database';
	} else {
		$enrolled_students_sql = "SELECT * FROM `member_list`";
		$enrolled_students_result = mysqli_query($conn, $enrolled_students_sql);
		while($row = mysqli_fetch_array($enrolled_students_result)) {
			$enrolled_name[] = $row['name'];
		}
		$enrolled_students_count = count($enrolled_name);

		$paid_members_sql = "SELECT * FROM `member_list` WHERE mem_fee_status = 'paid'";
		$paid_members_result = mysqli_query($conn, $paid_members_sql);
		while($row = mysqli_fetch_array($paid_members_result)) {
			$paid_name[] = $row['name'];
		}
		$paid_members_count = count($paid_name);

		$unpaid_members_sql = "SELECT * FROM `member_list` WHERE mem_fee_status = 'unpaid'";
		$unpaid_members_result = mysqli_query($conn, $unpaid_members_sql);
		while($row = mysqli_fetch_array($unpaid_members_result)) {
			$unpaid_name[] = $row['name'];
		}
		$unpaid_members_count = count($unpaid_name);
		//Charts

		//Ratings
		
		// $officers_rating_sql = "SELECT AVG(`rating`) AS 'average' FROM `ratings`;"; 
		// $officers_rating_result = mysqli_query($conn, $officers_rating_sql);
		// $officers_rating = mysqli_fetch_array($officers_rating_result); 
		// while($row = mysqli_fetch_array($officers_rating_result)) {
		// 	$officers_rating[] = $row['average'];
		// } Anong gusto mong gaw
		// $officers_rating_rounded = round($officers_rating[0], 0);
	} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/dashboard-style.css">
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
				<li><a href="dashboard.php" class="active">DASHBOARD</a></li>

				<li><a href="member-list.php"></i> MEMBER LIST</a></li>

				<li><a href="officer.php">OFFICERS</a></li>

				<li><a href="help-desk.php">HELP DESK</a></li>
			</ul>
		</aside>
			<!-- SIDEBAR -->

			<section id="content">
		<nav>
			<H1>DASHBOARD</H1>
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
			<div class="info-data">
					<div class="card">
						<div class="head">
							<h2>BSIT Enrolled: </h2> <br>
							<div class="head">
							<div class="block">
								<div class="description"> 
									<b class="number"> <?php echo $enrolled_students_count ?> </b>
								</div>
							</div>
						</div>
							<p></p>
							<hr>
						</div>
					</div>


					<div class="card">
						<h2>NUMBER OF PAID</h2>
						<div class="head">
							<div class="block">
								<canvas id="paid-stud-chart"> </canvas>
								<div class="description"> 
									<b class="number"> <?php echo $paid_members_count ?> </b>
								</div>
							</div>
						</div>
					</div>
	
					<div class="card">
						<div class="head">
							<div>
								<h2>NUMBER OF UNPAID</h2>
								<div class="head">
									<div class="block">
										<canvas id="unpaid-stud-chart"> </canvas>
										<div class="description"> 
											<b class="number"> <?php echo $unpaid_members_count ?> </b>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="card">
						<div class="">
							<div>
							<h2>Click to Rate:</h2>
							<div class="stars" id="stars">
								<div class="star">
									<div class="star-fill"></div>
									★★★★★
								</div>
							</div>
							</div>
						</div>
					</div>
				
			</div>
		</main>
	</section>
	</div>

	<script src="script/nav.js"></script>

	<!-- Chart -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.1.1/chart.min.js"></script>
	<SCript>

		var chrt = document.getElementById("paid-stud-chart").getContext("2d");
		var paid_stud_chart = new Chart(chrt, {
			type: 'doughnut',
			data: {
				datasets: [{
					label: "online tutorial subjects",
					data: [<?php echo $paid_members_count?>, <?php echo $enrolled_students_count?>-<?php echo $paid_members_count?>],
					backgroundColor: ['#6C4E31', 'rgba(0, 0, 0, 0)'],
					borderWidth: 1,
					borderColor: "#6C4E31",
				}],
			},
			options: {
				responsive: false,
				plugins: {
					tooltip: {
						enabled: false
					}
				}
			},
		});

		var chrt = document.getElementById("unpaid-stud-chart").getContext("2d");
		var unpaid_stud_chart = new Chart(chrt, {
			type: 'doughnut',
			data: {
				datasets: [{
					label: "online tutorial subjects",
					data: [<?php echo $unpaid_members_count?>, <?php echo $enrolled_students_count?>-<?php echo $unpaid_members_count?>],
					backgroundColor: ['#6C4E31', 'rgba(0, 0, 0, 0)'],
					borderWidth: 1,
					borderColor: "#6C4E31",
				}],
			},
			options: {
				responsive: false,
				plugins: {
					tooltip: {
						enabled: false
					}
				}
			},
		});
	//Chart

	//Ratings
	const starFill = document.querySelector(".star-fill");
        const ratingText = document.getElementById("rating");

        // Fetch rating from database
        function fetchRating() {
            fetch("get_rating.php")
                .then(response => response.json())
                .then(data => {
                    let rating = parseFloat(data.rating);
                    ratingText.textContent = `Rating: ${rating}`;
                    updateStars(rating);
                });
        } Ita-try kong i-combine lang. Makalat kaz kapag hiwalay pa

        // Function to update star fill
        function updateStars(value) {
            let percentage = (value * 20).toFixed(1) + "%";
            starFill.style.width = percentage;
        } //Saan pinapalitan value, love,

        // Initialize by fetching the rating
        fetchRating();

		</script>
	<!-- Ratings -->

</body>
</html>