<?php
require __DIR__.'/assets/back-end/data.php';
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/10up-sanitize.css/8.0.0/sanitize.css">
	<link rel="stylesheet" href="assets/stylesheet/main.css">
	<link rel="stylesheet" href="assets/stylesheet/navbar.css">
	<link rel="stylesheet" href="assets/stylesheet/mobile-menu.css">
	<link rel="stylesheet" href="assets/stylesheet/mobile-body.css">
	<link rel="stylesheet" href="assets/stylesheet/form.css">
	<link rel="stylesheet" href="assets/stylesheet/mediaquery.css">
	<link rel="icon" href="assets/images/saabfavicon.png">
	<title>The Martians</title>
</head>

<body>

	<header>

		<nav class="nav-container">
			<div class="desk-logo-container"><a class="active" href="#home"><img class="desk-logo-img" src="assets/images/desktop/desk-logo.svg" alt=""></a></div>

			<!-- Desktop Navigation  -->

			<div class="desk-nav">
				<div class="email-desk nav-button"><a href="#email">Email</a></div>
				<div class="catalogue-desk nav-button"><a  href="#catalogue"><?= $language['nav-discover']; ?></a></div>
				<div class="lang-sv-desk nav-button"><a href="?lang=sv">SV</a></div>
				<div class="lang-en-desk nav-button"><a href="?lang=en">EN</a></div>
			</div>

			<div class="mob-logo-container"><a href="#home"><img class="mob-logo-img" src="assets/images/mobile/logomobile.svg" alt=""></a></div>
			<!-- Burger menu icon -->

			<div class="burger-icon" id="burger-icon">
				<div id="bar-one" class="bar-one"></div>
				<div id="bar-two" class="bar-two"></div>
				<div id="bar-three" class="bar-three"></div>
			</div>

			<!-- Mobile menu  -->

			<div class="mobile-menu" id="mobile-menu">

				<div class="mobile-menu-top">
					<div class="email-mobile"><a href="#email">Email</a></div>
					<div class="catalogue-mobile"><a href="#catalogue"><?= $language['nav-discover']; ?></a></div>

					<div class="line"></div>

					<div class="mob-footer-content">
					<div class="mob-facebook"><a href="#">Facebook</a></div>
					<div class="mob-instagram"><a href="#">Instagram</a></div>
					<div class="mob-twitter"><a href="#">Twitter</a></div>
					<div class="mob-fs"><a href="#">FS.1.0</a></div>
					<div class="mob-contact"><a href="#"><?= $language['contact']; ?></a></div>
					<div class="mob-policy"><a href="#"><?= $language['policy']; ?></a></div>
				</div>
				</div>


				<div class="mobile-menu-bot">
					<div class="lang-container">
						<div class="lang-sv-mobile"><a href="?lang=sv">SV</a></div>
						<div class="lang-en-mobile"><a href="?lang=en">EN</a></div>
					</div>
				</div>
			</div>
		</nav>
	</header>


	<!-- body -->

	<div class="container">
		<div class="slider">
			<div class="slide slide1 section" id="home">
				<div class="slide-content">
					<h1 class="start-header"><?= $language['title']; ?></h1>
				</div>
			</div>
			<div class="slide slide2 section" id="email">
				<div class="slide-content">
					<?php require __DIR__.'/assets/back-end/form.php'; ?>
				</div>
			</div>
			<div class="slide slide3 section" id="catalogue">
				<div class="slide-content">
					<?php require __DIR__.'/assets/back-end/download.php' ;?>
				</div>
			</div>
			<div class="buttons">
				<a href="#home"></a>
				<a href="#email"></a>
				<a href="#catalogue"></a>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer>
		<div>
			<ul>
				<li><a href="#"><span class="foot-facebook"></span> Facebook</a></li>
				<li><a href="#"><span class="foot-twitter"></span> Twitter</a></li>
				<li><a href="#"><span class="foot-instagram"></span> Instagram</a></li>
			</ul>
		</div>
		<div>
			<ul>
				<li><a href="#">FS 1.0</a></li>
				<li><a href="#"><?= $language['contact']; ?></a></li>
				<li><a target="_blank" href="https://youtu.be/TgqiSBxvdws"><?= $language['policy']; ?></a></li>
			</ul>
		</div>
	</footer>

	<!-- Script -->

	<script src="assets/scripts/scripts.js" charset="utf-8"></script>

</body>
</html>
