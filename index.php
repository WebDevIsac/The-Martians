<?php
require __DIR__.'/assets/data.php';
$language = $data[$_GET['lang']];
if(!isset($language)) {
	header('Location: index.php?lang=en');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="fonts">
	<link rel="stylesheet" href="assets/stylesheet/style.css">
	<link rel="icon" href="assets/images/saabfavicon.png">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<title>The Martians</title>
</head>
<body>
	<div id="top"></div>


	<nav class="nav-container">
		<div class="logo-container"><div class="logo-wrapper"><a class="active" href="#image1"><img class="logo-img" src="assets/images/saabLogo.png" alt=""></a></div></div>

		<!-- Desktop Navigation  -->

		<div class="desk-nav">
			<div class="email-desk nav-button"><a href="#image2">Email</a></div>
			<div class="catalogue-desk nav-button"><a  href="#image3">Produkt katalog</a></div>
			<div class="lang-sv-desk nav-button"><a href="?lang=sv">SV</a></div>
			<div class="lang-en-desk nav-button"><a href="?lang=en">EN</a></div>
		</div>
		<!-- Burger menu icon -->

		<div class="burger-icon" id="burger-icon">
			<div id="bar-one" class="bar-one"></div>
			<div id="bar-two" class="bar-two"></div>
			<div id="bar-three" class="bar-three"></div>
		</div>

		<!-- Mobile menu  -->

		<div class="mobile-menu" id="mobile-menu">

			<div class="mobile-menu-top">
				<div class="email"><a href="#">Email</a></div>
				<div class="catalogue"><a href="#">Produkt katalog</a></div>
			</div>

			<div class="mobile-menu-bot">
				<div class="lang-container">
					<div class="lang-sv"><a href="?lang=sv">SV</a></div>
					<div class="lang-en"><a href="?lang=en">EN</a></div>
				</div>
			</div>

		</div>
	</nav>


	<!-- Start -->

	<div class="container">
		<div class="slider">
			<div class="slide slide1 section" id="image1">
				<div class="slide-content">
					<h1 class="start-header"><?= $language['title']; ?></h1>
				</div>
			</div>
			<div class="slide slide2 section" id="image2">
				<div class="slide-content test">
					<div>

						<?php require __DIR__.'/assets/form.php'; ?>
					</div>
				</div>
			</div>
			<div class="slide slide3 section" id="image3">
				<div class="slide-content">
					<h1><?= $language['title']; ?></h1>
					<p><?= $language['content']; ?></p>
				</div>
			</div>
			<div class="buttons">
				<a href="#image1"></a>
				<a href="#image2"></a>
				<a href="#image3"></a>
			</div>
			<footer>
				<div>
					<ul>
						<li><a href="#"><span class="fab fa-facebook"></span> Facebook</a></li>
						<li><a href="#"><span class="fab fa-twitter"></span> Twitter</a></li>
						<li><a href="#"><span class="fab fa-instagram"></span> Instagram</a></li>
					</ul>
				</div>
				<div>
					<ul>
						<li><a href="#">FS 1.0</a></li>
						<li><a href="#">Contact us</a></li>
						<li><a href="#">Privacy policy</a></li>
					</ul>
				</div>
			</footer>
		</div>
	</div>
	<script src="assets/script.js" charset="utf-8"></script>

</body>
</html>
