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
			<a href="index.php" class="header-logo-link"><img src="icons\Logo.svg" alt="CarGo! Logo"
					class="header-logo"></a>
			<button class="burger-button" id="burger-button">
				<img src="icons\menu_24dp_FFFFFF_FILL0_wght400_GRAD0_opsz24.svg" alt="burger-button">
			</button>
			<ul class="header-nav-list" id="nav-list">
				<li class="header-nav-item"><a href="sedans.php" class="header-nav-link">Sedans</a></li>
				<li class="header-nav-item"><a href="#" class="header-nav-link">Suv`s</a></li>
				<li class="header-nav-item"><a href="#" class="header-nav-link">Luxury Cars</a></li>
				<li class="header-nav-item"><a href="#" class="header-nav-link">Weefend Getaway</a></li>
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
						protection in a collision. The lower center of gravity also contributes to better stability on
						the road.
					</p>
					<img src="icons/Safety.svg" alt="">
				</div>
				<div class="advantages-card">
					<h3 class="card-heading">Economical</h3>
					<p class="card-info">Many sedans have good fuel efficiency compared to SUVs and large cars, which
						reduces operating costs..</p>
					<img src="icons/Car.svg" alt="">
				</div>
				<div class="advantages-card">
					<h3 class="card-heading">Style and prestige</h3>
					<p class="card-info">Many sedans have an elegant and modern design that can create a more
						prestigious image.</p>
					<img src="icons/Desigh.svg" alt="">
				</div>
			</div>
		</section>
	</main>
	<script src="sedans.js"></script>
</body>

</html>