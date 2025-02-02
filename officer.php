<?php
	require('validation.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/dashboard-style.css">
	<link rel="stylesheet" href="style/nav-side.css">
	<link rel="stylesheet" href="style/officer-style.css">
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

				<li><a href="member-list.php"></i> MEMBER LIST</a></li>

				<li><a href="officer.php" class="active">OFFICERS</a></li>

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
					<li><a href="../html/login-page.html"><i class="fas fa-solid fa-arrow-right-from-bracket"></i> Logout</a></li>
				</ul>
			</div>
		</nav>
			
		<!-- Main -->
		<main>
    <h2>Rate Each Person</h2>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Rating</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>John</td>
                <td>
                    <div class="stars" data-name="John">
                        <span class="star" data-value="1">&#9733;</span>
                        <span class="star" data-value="2">&#9733;</span>
                        <span class="star" data-value="3">&#9733;</span>
                        <span class="star" data-value="4">&#9733;</span>
                        <span class="star" data-value="5">&#9733;</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Sarah</td>
                <td>
                    <div class="stars" data-name="Sarah">
                        <span class="star" data-value="1">&#9733;</span>
                        <span class="star" data-value="2">&#9733;</span>
                        <span class="star" data-value="3">&#9733;</span>
                        <span class="star" data-value="4">&#9733;</span>
                        <span class="star" data-value="5">&#9733;</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Michael</td>
                <td>
                    <div class="stars" data-name="Michael">
                        <span class="star" data-value="1">&#9733;</span>
                        <span class="star" data-value="2">&#9733;</span>
                        <span class="star" data-value="3">&#9733;</span>
                        <span class="star" data-value="4">&#9733;</span>
                        <span class="star" data-value="5">&#9733;</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Emma</td>
                <td>
                    <div class="stars" data-name="Emma">
                        <span class="star" data-value="1">&#9733;</span>
                        <span class="star" data-value="2">&#9733;</span>
                        <span class="star" data-value="3">&#9733;</span>
                        <span class="star" data-value="4">&#9733;</span>
                        <span class="star" data-value="5">&#9733;</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>David</td>
                <td>
                    <div class="stars" data-name="David">
                        <span class="star" data-value="1">&#9733;</span>
                        <span class="star" data-value="2">&#9733;</span>
                        <span class="star" data-value="3">&#9733;</span>
                        <span class="star" data-value="4">&#9733;</span>
                        <span class="star" data-value="5">&#9733;</span>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
		</main>
	</section>
	</div>

	<script src="script/nav.js"></script>
	<script>
        document.querySelectorAll(".stars").forEach(starContainer => {
            let selectedRating = 0;
            let name = starContainer.getAttribute("data-name");

            starContainer.querySelectorAll(".star").forEach(star => {
                star.addEventListener("click", () => {
                    selectedRating = star.getAttribute("data-value");

                    starContainer.querySelectorAll(".star").forEach(s => s.classList.remove("selected"));
                    for (let i = 0; i < selectedRating; i++) {
                        starContainer.children[i].classList.add("selected");
                    }

                    sendRatingToDatabase(name, selectedRating);
                });

                star.addEventListener("mouseover", () => {
                    starContainer.querySelectorAll(".star").forEach(s => s.classList.remove("selected"));
                    for (let i = 0; i < star.getAttribute("data-value"); i++) {
                        starContainer.children[i].classList.add("selected");
                    }
                });

                star.addEventListener("mouseleave", () => {
                    starContainer.querySelectorAll(".star").forEach(s => s.classList.remove("selected"));
                    for (let i = 0; i < selectedRating; i++) {
                        starContainer.children[i].classList.add("selected");
                    }
                });
            });
        });

        function sendRatingToDatabase(name, rating) {
            fetch('/submit-rating', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ name: name, rating: rating })
            })
            .then(response => response.json())
            .then(data => console.log("Rating saved for", name, ":", data))
            .catch(error => console.error("Error:", error));
        }
    </script>
</body>
</html>