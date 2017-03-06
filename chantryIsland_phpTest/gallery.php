<!doctype html>
<html>
<head>
<meta charset="utf-8" name="viewport" content="width=device-width"/>
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<title>Chantry Island | Gallery</title>
<link href="css/foundation.min.css" rel="stylesheet" type="text/css" media="screen">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="css/main.css" rel="stylesheet" type="text/css" media="screen">
</head>
<body>

<div id="movingClouds"></div>
<div id="movingCloudsTwo"></div>

<header>
  <?php include 'includes/nav.php'; ?>
</header>

  <div id="siteCon">
    <section id="galleryPage"><!-- galleryPage starts -->
      <h1>Photo Gallery</h1>
      <p>Welcome to our photo gallery. This section includes pictures of Chantry Island and the area of Lake Huron surrounding the Island.
      <br>
      It also includes pictures of the lighthouse and keeper's cottage inside and out, as well as photos of some of the birds and flowers
      native to the island.
      <br><br>
      If you have photos of Chantry Island that you would like to share with us, connect with our <a href="https://www.facebook.com/MarineHeritageSociety">Facebook page</a>.</p>

      <div id="gallery">
        <ul class="galleryCon">
          <li class="galleryPhotos"><img src="images/chantry_thumb1.jpg" alt="aerial of the lighthouse" id="photo1"></li>
          <li class="galleryPhotos"><img src="images/chantry_thumb2.jpg" alt="aerial of the lighthouse" id="photo2"></li>
          <li class="galleryPhotos"><img src="images/chantry_thumb3.jpg" alt="Light house close up" id="photo3"></li>
        </ul>

        <ul class="galleryCon">
            <li class="galleryPhotos"><img src="images/chantry_thumb4.jpg" alt="Photo of Boat" id="photo4"></li>
            <li class="galleryPhotos"><img src="images/chantry_thumb5.jpg" alt="Cottage from the inside" id="photo5"></li>
            <li class="galleryPhotos"><img src="images/chantry_thumb6.jpg" alt="Cottage and lighthouse from ground" id="photo6"></li>
        </ul>

        <ul class="galleryCon">
            <li class="galleryPhotos"><img src="images/chantry_thumb7.jpg" alt="Sunset at Chantry Island" id="photo7"></li>
            <li class="galleryPhotos"><img src="images/chantry_thumb8.jpg" alt="Pink Rose" id="photo8"></li>
            <li class="galleryPhotos"><img src="images/chantry_thumb9.jpg" alt="Cottage before restoration" id="photo9"></li>
        </ul>
      </div>
    </section> <!-- End of galleryPage -->

<div id="pop">
  <img src="images/closeButton.svg" alt="close full image button" id="closeButton">
  <div id="fullPhotoInfo">
    <img id="mainImg" alt="Full selected photo">
    <p id="desc"></p>
    <p id="cred">Photo Credit:</p>
  </div>
</div>

<div class="divider"></div>

<?php include 'includes/contact.php'; ?>

<br class="siteConStretcher"> <!--Clears floats to make the site continue to bottom-->


</div> <!-- End of siteCon-->
<footer>
  <?php include 'includes/footer.php'; ?>
</footer>

<script src="js/vendor/jquery.min.js"></script>
<script src="js/vendor/what-input.min.js"></script>
<script src="js/foundation.min.js"></script>
<script src="js/TweenLite.min.js"></script>
<script src="js/TweenMax.min.js"></script>
<script src="js/ScrollToPlugin.min.js"></script>
<script src="js/main.js"></script>
<script src="js/gallery.js"></script>
</body>
</html>
