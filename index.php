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
  <link rel="stylesheet" href="assets/stylesheet/style.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="fonts">
  <link rel="icon" href="assets/images/saabfavicon.png">
  <title>The Martians</title>
</head>
<body>
  <div id="top"></div>


  <nav class="nav-container">
    <div class="logo-container"><a href="#top"><img class="logo-img" src="assets/images/saabLogo.png" alt=""></a></div>

    <!-- Desktop Navigation  -->

    <div class="desk-nav">
      <div class="email-desk nav-button"><a href="#">Email</a></div>
      <div class="catalogue-desk nav-button"><a  href="#">Produkt katalog</a></div>
      <div class="lang-sv-desk nav-button"><a href="?lang=sv">SV</a></div>
      <div class="lang-eng-desk nav-button"><a href="?lang=en">ENG</a></div>
    </div>

    <!-- Burger menu icon -->

    <div class="burger-icon" id="burger-icon">
      <div id="bar-one" class="bar-one"></div>
      <div id="bar-two" class="bar-two"></div>
      <div id="bar-three" class="bar-three"></div>
    </div>

    <!-- Mobile menu  -->

    <div class="mobile-menu" id="mobile-menu">

      <div class="email"><a href="#">Email</a></div>
      <div class="catalogue"><a href="#">Produkt katalog</a></div>
      <div class="lang-container">
        <div class="lang-sv"><a href="?lang=sv">SV</a></div>
        <div class="lang-eng"><a href="?lang=en">ENG</a></div>
      </div>
    </div>
  </nav>


<!-- Start -->

<div class="container">
  <div class="slider">
    <div class="slide slide1" id="image1">
      <div class="slide-content">
        <h1><?= $language['title']; ?></h1>
        <p><?= $language['content']; ?></p>
      </div>
    </div>
    <div class="slide slide2" id="image2">
      <div class="slide-content">
        <p>Placeat aut nihil ut aliquid sequi corrupti consectetur ut ipsam.</p>
      </div>
    </div>
    <div class="slide slide3" id="image3">
      <div class="slide-content">
        <p>Odit reiciendis quod vel velit rerum eum earum temporibus et.</p>
      </div>
    </div>
    <div class="buttons">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
</div>


<script src="assets/script.js" charset="utf-8"></script>

</body>
</html>