<!doctype html>
<html>
<head>
<meta charset="utf-8" name="viewport" content="width=device-width"/>
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<title>Chantry Island</title>
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

    <div class="mapCon">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2845.741603803669!2d-81.37533528447456!3d44.49996117910135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8829cfb09f0d9f8f%3A0x1763c7a384426522!2s86+Saugeen+St%2C+Southampton%2C+ON+N0H+2L0!5e0!3m2!1sen!2sca!4v1486436368203" width="400" height="300" frameborder="0" style="border:0" allowfullscreen id="map"></iframe>

      <div id="directionText">
        <h1>Directions</h1>
          <p>
          From Highway 21 in Southampton, turn west on Clarendon and follow the signs, or From High Street, (the main street), turn north on Huron or Grosvenor Street and look for the signs.
          </p>
      </div>
      <div class="stretcher"></div>
    </div>

    <div id="mobileDirections">
    <h1>Directions</h1>
      <p>
      From Highway 21 in Southampton, turn west on Clarendon and follow the signs, or From High Street, (the main street), turn north on Huron or Grosvenor Street and look for the signs.
      </p>
    </div>
    <div id="contactInfo">
      <h2>Contact Information</h2>

      <p>Call:</p>
      <a href="tel:519-797-5862">
        519-797-5862
      </a>
      <br>
      <br>
      <p>Toll Free:</p>
      <a href="tel:1-866-767-5862">
        1-866-767-5862
      </a>

      <div id="mailing">
      <h2>Mailing Address</h2>
      <p>
        Marine Heritage Society
        <br>
        Box 421
        <br>
        Southampton, Ontario
        <br>
        Canada, N0H
      </p>
      </div>
    </div>

    <form id="emailField">
      <h2>Contact us</h2>
      <input type="text" id="fname" name="firstname" placeholder="Name" class="field">
      <input type="email" id="lname" name="email" placeholder="E-mail address" class="field">
      <textarea rows="6" cols="50" name="message" placeholder="Enter your message here..." class="field"></textarea>
      <input type="submit" value="SEND" id="submitButton">
    </form>

    <br class="stretcher">



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
<script src="js/app.js"></script>
<script src="js/TweenLite.min.js"></script>
<script src="js/TweenMax.min.js"></script>
<script src="js/ScrollToPlugin.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
