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
				<li class="header-nav-item"><a href="#" class="header-nav-link">Suv`s</a></li>
				<li class="header-nav-item"><a href="#" class="header-nav-link">Luxury Cars</a></li>
				<li class="header-nav-item"><a href="#" class="header-nav-link">Weefend Getaway</a></li>
				<li class="header-nav-item"><a href="#" class="header-nav-link">Family Roadtrip</a></li>
				<li class="header-nav-item"><a href="#" class="header-nav-link">Business Travel</a></li>
			</ul>
			<a href="#" class="header-profile-link"><img src="icons\person.svg" alt="Profile-link-button"></a>
		</nav>
	</header>
	<script src="sedans.js"></script>
</body>

</html>