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

    <div class="video">
      <img src="images/storyBoardScreenshot.png" alt="video placeholder" id="videoCon">
        <div class="playButton">
          <div class="rightArrow"></div>
        </div>
    </div>

    <section id="welcomePage">
      <h1>Marine Heritage Society</h1>
      <p>The Marine Heritage Society is a not-for-profit group of volunteers dedicated to the preservation and enhancement of our community's marine history. The goal of the Society is to identify, preserve and restore material items of marine historical significance and to raise sufficient funds to support these endeavors.
      <br>
      <br>
      Among other projects, the Society manages the Chantry Island Light Station under agreements and restrictions from the Canadian Coast Guard and the Canadian Wildlife Service.</p>

      <ul id="flexCon">
        <li class="photos">
          <img src="images/welcomeAerialView.jpg" alt="Chantry Island photo">
          <!--<img src="images/welcomeAerialViewDesktop.jpg"> -->
        </li>
        <li class="photos">
          <img src="images/welcomeLighthouseBoat.jpg" alt="Boat photo">
          <!--<img src="images/welcomeLighthouseBoatDesktop.jpg">-->
        </li>
      </ul>

      <article id="touringBlurb">
      <h2>Touring Chantry Island</h2>
      <p>As you take the 15 minute boat ride to the island you will enjoy the outstanding views of the sandy beach shoreline and the deep blue waters of Lake Huron. During your two hour guided visit on Chantry Island, you have the opportunity to climb to the top of the Imperial Lighthouse for extraordinary views of the island.
      <br>
      <br>
      Stroll back in time while visiting the Light Keeper's Cottage as it existed in the late 1800’s, decorated with period furnishings from private donors and the Bruce County Museum and Cultural Centre. You will also see the surrounding gardens and many species of birds.</p>

        <img src="images/welcomeCottage.jpg" alt="Keeper's Cottage photo" id="cottagePhoto">
      </article>
    </section>

    <div class="divider"></div>

    <section>
      <h2>Book a Tour</h2>
      <p>
        The tour is much like a medium hike and requires a degree of agility and fitness. You can enjoy the tour without climbing the 106 steps in the Lighthouse tower. However, when you do reach the light room, you will always remember the view.
        <br>
        <br>
        For safety, children must be a minimum of 4 feet tall and must be accompanied by an Adult. Footwear suitable for hiking is mandatory. For safety reasons, Flip-Flops are not allowed.
      </p>

      <div id="rates">
        <h2>Rates:</h2>
        <p>$30.00 per person (includes HST). Same price for children and adults.</p>
        <p>Special group rates available</p>
        <p>MasterCard, Visa, Debit accepted</p>
      </div>

      <section id="contactArea">
        <h2 class="hidden">Contact Section</h2>
        <button id="scheduleButton" class="bookingSchedule">
          <a href="booking.html">
            View scheduling details
          </a>
        </button>

        <div id="ratesDivider" class="bookingSchedule"></div>

        <div id="callMe" class="bookingSchedule">
          <p>Call:</p>
          <a href="tel:519-797-5862">
            519-797-5862
          </a>
          <p>Toll Free:</p>
          <a href="tel:1-866-767-5862">
            1-866-767-5862
          </a>
        </div>
        </section>
    </section>
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
