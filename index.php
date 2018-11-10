<?php
require __DIR__.'/assets/functions.php';
require __DIR__.'/assets/data.php';

$language = $data[$_GET['lang']];
if(empty($language)) {
	header('Location: /?lang=sv');
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

<body id="body">
  <header>

    <!-- Desktop Navigation  -->

    <nav class="navContainer">

      <div class="desktopNav">
        <div class="logoContainer"><a href="#top"><img class="logoImg" src="assets/images/saabLogo.png" alt=""></a></div>
        <div class="email button"><a href="#">Email</a></div>
        <div class="catalogue button"><a  href="#">Produkt katalog</a></div>
        <div class="langSV button"><a href="?lang=sv">SV</a></div>
        <div class="langENG button"><a href="?lang=en">ENG</a></div>
      </div>

      <!-- Burger menu icon -->

      <div class="burgerIcon" id="burgerIcon">
        <div id="barOne" class="barOne"></div>
        <div id="barTwo" class="barTwo"></div>
        <div id="barThree" class="barThree"></div>
      </div>

      <!-- Mobile menu  -->

      <div class="mobileMenu" id="mobileMenu">
        <div class="emailMobile"><a href="#">Email</a></div>
        <div class="catalogueMobile"><a href="#">Produkt katalog</a></div>
        <div class="langContainer">
          <div class="langSV"><a href="?lang=sv">SV</a></div>
          <div class="langENG"><a href="?lang=en">ENG</a></div>
        </div>
      </div>
    </nav>
  </header>




  <div class="container">
    <div class="slider">
      <div class="slide slide1">
        <div class="slide-content">
         <div>
          <h1><?= $language['title'];?></h1>
          <p><?= $language['content']; ?></p> 
        </div>
      </div>
    </div>
    <div class="slide slide2">
      <div class="slide-content">
       <h1><?= $language['title'];?></h1>
       <p><?= $language['content']; ?></p> 
     </div>
   </div>
   <div class="slide slide3">
    <div class="slide-content">
     <h1><?= $language['title'];?></h1>
     <p><?= $language['content']; ?></p> 
   </div>
 </div>
 <div class="buttons">
  <div class=""></div>
  <div class=""></div>
  <div class=""></div>
</div>
</div>
</div>
<div class="container2">
  <div class="slide-content">
   <h1><?= $language['title'];?></h1>
   <p><?= $language['content']; ?></p> 
 </div>
</div>
<div class="container3">
  <div class="slide-content">
    <h1><?= $language['title'];?></h1>
    <p><?= $language['content']; ?></p> 
  </div>
</div>


<script src="assets/script.js" charset="utf-8"></script>

</body>
</html>