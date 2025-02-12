<?
require_once 'db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="sedans.css">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<header class="header">
		<nav class="header-nav-menu" id="nav-bar">
			<a href="index.php" class="header-logo-link"><img src="icons\Logo.svg" alt="CarGo! Logo" class="header-logo"></a>
			<button class="burger-button" id="burger-button">
				<img src="icons\menu_24dp_FFFFFF_FILL0_wght400_GRAD0_opsz24.svg" alt="burger-button">
			</button>
			<ul class="header-nav-list" id="nav-list">
				<li class="header-nav-item"><a href="sedans.php" class="header-nav-link">Sedans</a></li>
				<li class="header-nav-item"><a href="suvs.php" class="header-nav-link">Suv`s</a></li>
				<li class="header-nav-item"><a href="luxury.php" class="header-nav-link">Luxury Cars</a></li>
				<li class="header-nav-item"><a href="weekend-gateaway.php" class="header-nav-link">Weefend Getaway</a></li>
				<li class="header-nav-item"><a href="#" class="header-nav-link">Family Roadtrip</a></li>
				<li class="header-nav-item"><a href="#" class="header-nav-link">Business Travel</a></li>
			</ul>
			<a href="#" class="header-profile-link"><img src="icons\person.svg" alt="Profile-link-button"></a>
		</nav>
	</header>
	<main class="main">
		<section class="hero">
			<h1 class="hero-title">Sedans</h1>
			<p class="hero-subtitle">Our choice in sedans</p>
		</section>
		<section class="advantages">
			<h2 class="advantages-heading">Advantages of the type</h2>
			<div class="advantages-cards-container">
				<div class="advantages-card">
					<h3 class="card-heading">Comfort</h3>
					<p class="card-info">Sedans tend to offer a more spacious interior and comfortable seats, making
						trips comfortable for all passengers.</p>
					<img src="icons/Car.svg" alt="">
				</div>
				<div class="advantages-card">
					<h3 class="card-heading">Safety</h3>
					<p class="card-info">Sedans often have a more rigid body structure, which can provide additional
						protection in a collision.
					</p>
					<img src="icons/Safety.svg" alt="">
				</div>
				<div class="advantages-card">
					<h3 class="card-heading">Economical</h3>
					<p class="card-info">Many sedans have good fuel efficiency compared to SUVs and large cars, which
						reduces operating costs..</p>
					<img src="icons/Money.svg" alt="">
				</div>
				<div class="advantages-card">
					<h3 class="card-heading">Style and prestige</h3>
					<p class="card-info">Many sedans have an elegant and modern design that can create a more
						prestigious image.</p>
					<img src="icons/Desigh.svg" alt="">
				</div>
			</div>
		</section>
		<section class="catalog sedans">
			<h4 class="catalog-heading sedans-heading">Our Sedans Car</h4>
			<div class="catalog-cards-container sedans-catalog-container">
				<?php
				$sql = "SELECT id, car_mark, car_day_price, car_type, car_seats, car_dours, car_climate, car_image 
				FROM cars 
				WHERE car_type = 'Sedan'";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while ($row = $result->fetch_assoc()) {
						?>
						<?php
						echo '<div class="catalog-card ' . ($row["id"] >= count($row) - 1 ? 'hidden' : '') . '">';
						echo '<img src="' . $row["car_image"] . '" alt="' . $row["car_mark"] . '" class="catalog-card-image">';
						echo '<div class="catalog-card-info">';
						echo '<p class="catalog-card-name">' . $row["car_mark"] . '</p>';
						echo '<p class="catalog-card-price">Starting at ' . $row["car_day_price"] . '/ Day</p>';
						echo '<div class="catalog-card-specifications">';
						echo '<div class="catalog-card-type"> <img src="icons\Car.svg" alt=""> ' . $row["car_type"] . '</div>';
						echo '<div class="catalog-card-type"> <img src="icons\Seats.svg" alt=""> ' . $row["car_seats"] . ' seats</div>';
						echo '<div class="catalog-card-type"> <img src="icons\Doors.svg" alt=""> ' . $row["car_dours"] . ' doors</div>';
						echo '<div class="catalog-card-type"> <img src="icons\Snowflake.svg" alt=""> ' . $row["car_climate"] . '</div>';
						echo '</div>';
						echo '</div>';
						echo '<div class="catalog-card-buttons">';
						echo '<button class="catalog-card-details">Details</button>';
						echo '<button class="catalog-card-book">Book</button>';
						echo '<input/ value="' . $row["id"] . '" type="hidden">';
						echo '</div>';
						echo '</div>';
					}
				}
				?>
			</div>
		</section>
		<section class="footer">
			<div class="footer-contacts">
				<a class="footer-main-link" href="#"><img src="icons/Logo.svg" alt=""></a>
				<address class="footer-address">185 Medina Stravenue</address>
				<address class="footer-post">support@gmail.com</address>
				<address class="footer-contact-number">(717) 342 759 774</address>
			</div>
			<nav class="footer-nav-bar">
				<ul class="footer-nav-best-offers">
					<li class="footer-best-offers-item">Best Offers</li>
					<li class="footer-best-offers-item"><a href="#" class="footer-nav-link">Weefend Getaway</a></li>
					<li class="footer-best-offers-item"><a href="#" class="footer-nav-link">Family Roadtrip</a></li>
					<li class="footer-best-offers-item"><a href="#" class="footer-nav-link">Business Travel</a></li>
				</ul>
				<ul class="footer-nav-our-cars">
					<li class="footer-our-cars-item">Our Cars</li>
					<li class="footer-our-cars-item"><a href="#" class="footer-nav-link">Luxury Cars</a></li>
					<li class="footer-our-cars-item"><a href="sedans.php" class="footer-nav-link">Sedans</a></li>
					<li class="footer-our-cars-item"><a href="#" class="footer-nav-link">Suv`s</a></li>
				</ul>
			</nav>
			<div class="footer-nav-socials">
				<span class="footer-socials-heading">Get in touch</span>
				<div class="footer-nav-social-container">
					<a class="header-nav-social-link" href="#"><img src="icons\Social-whatsapp-icon.svg" alt="social-whatsapp"></a>
					<a class="header-nav-social-link" href="#"><img src="icons\Social-telegram-icon.svg" alt="social-telegramm"></a>
					<a class="header-nav-social-link" href="#"><img src="icons\Social-vk-icon.svg" alt="social-vk"></a>
				</div>
			</div>
		</section>
	</main>
	<script src="sedans.js"></script>
</body>

</html>