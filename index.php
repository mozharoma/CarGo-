<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="index.css">
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
				<li class="header-nav-item"><a href="#" class="header-nav-link">Sedans</a></li>
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
		<section class="present">
			<h1 class="present-header">WE RENT THE HIGHEST CALIBER AUTOMOBILES</h1>
			<p class="present-subtitle">Easy, fast, and convenient — rent the car of your dreams in just a few minutes!</p>
			<div class="present-actions-group">
				<a href="#" class="anchor-link present-actions-rent-button">Rent Now</a>
				<a href="#" class="anchor-link present-learn-button">Learn More</a>
			</div>
			<form class="present-rent-form">
				<div class="form-rent-place">
					<label for="rent-place-input">Where to Pick Up</label>
					<input placeholder="Enter your location" type="text" name="rent-place-input">
				</div>
				<div class="form-pickup-date">
					<label for="rent-pickup-input">Pick Up Date</label>
					<input type="date" name="rent-pickup-inpu" id="rent-pickup-input">
				</div>
				<div class="form-return-date">
					<label for="rent-return-date-input">Pick Up Date</label>
					<input type="date" name="rent-return-date-inpu" id="rent-return-date-input">
				</div>
				<button class="form-search-button">
					<img src="icons\Search.svg" alt="">
					Search
				</button>
			</form>
		</section>
		<section class="slider">
			<div>
				<img src="icons\Subaru.svg" alt="Subaru-logo">
				<img src="icons\Mitsubishi.svg" alt="Mitsubishi-logo">
				<img src="icons\BMW.svg" alt="BMW-logo">
				<img src="icons\Mercedes.svg" alt="Mercedes-logo">
				<img src="icons\Toyota.svg" alt="Toyota-logo">
				<img src="icons\Land Rover.svg" alt="Land Rover-logo">
				<img src="icons\Ford.svg" alt="Ford-logo">
				<img src="icons\Tesla.svg" alt="Tesla-logo">
			</div>
		</section>
		<section class="steps">
			<span class="steps-subtitle">How It Works</span>
			<h2 class="steps-heading">Our Working Steps</h2>
			<div class="steps-card-container">
				<div class="steps-card">
					<div class="step-image"><img src="icons\Location.svg" alt=""></div>
					<h4 class="step-heading">Choose Location</h4>
					<p class="step-subtitle">Select the location where you would like to receive and return the car.</p>
				</div>
				<div class="steps-card">
					<div class="step-image"><img src="icons\Calendar.svg" alt=""></div>
					<h4 class="step-heading">Pick Up Date</h4>
					<p class="step-subtitle">Select the date of taking the car and the date of returning the car</p>
				</div>
				<div class="steps-card">
					<div class="step-image"><img src="icons\Car.svg" alt=""></div>
					<h4 class="step-heading">Book Your Car</h4>
					<p class="step-subtitle">Enjoy the car ride! Keep the car intact and don't break the traffic rules.</p>
				</div>
			</div>
		</section>
	</main>
	<script src="index.js"></script>
</body>

</html>