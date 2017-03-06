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

    <h1>Book a Tour</h1>
    <p>
      We offer tours throughout the summer season from late May to mid-September. During June and July, we offer the tour daily, check below for the exact schedule. Note, it does change on a yearly basis.
    </p>

    <section id="bookingList">
      <h2>Things to note before booking:</h2>
      <ul>
        <li>The 2 hour tour must be pre-booked and prepaid.</li>
        <li>There are 9 seats on the boat. The cost is $30.00 per person (includes HST).</li>
        <li>For refunds, cancellations must be received 24 hours before the scheduled departure.</li>
        <li>Chantry Island is a Federal Migratory Bird Sanctuary and No Pets allowed on the island.</li>
        <li>Cancellations can be caused by weather conditions but light rain is fine.</li>
      </ul>
      <p>Pre-book to avoid disappointment.</p>
    </section>

    <img src="images/chantryIsland.jpg" alt="Photo of Chantry Island" id="chantryIslandPhoto">

    <h2>Tour schedule for 2017</h2>


    <p>Month:</p>
    <div id="monthPicker">
      <ul>
        <li class="current">MAY</li>
        <li><div class="littleDiv"></div></li>
        <li>JUNE</li>
        <li><div class="littleDiv"></div></li>
        <li>JULY</li>
        <li><div class="littleDiv"></div></li>
        <li>AUGUST</li>
      </ul>
    </div>

    <p id="hoursLabel">Hours of operation:</p>
    <div id="scheduleCon">
      <p>Tour times:</p>
      <div class="miniDivider"></div>
      <div class="schedule">27th and 28th 1:00 PM - 3:00 PM</div>

      <p>Tour Base:</p>
      <div class="miniDivider"></div>
      <div class="schedule">Weekends 12:00 PM - 5:30 PM</div>
    </div>

<br class="stretcher">
    <section id="whereTo">
      <h2 class="hidden">Where to go section</h2>
      <article id="arrivalText">
        <h2>When and Where to Arrive</h2>
        <p>
        Come to the Chantry Island Tour Base and Gift Shop located at the south side of the Saugeen River at the harbour in Southampton (<a href="contact.php">See Maps</a>) and arrive 15 minutes ahead of your scheduled tour. Check in and receive your ticket. You will be directed to the dock for the Peerless II.
        </p>
      </article>
    <img src="images/tourBase.jpg" alt="Tour base photo" id="tourBase">
    </section>


      <div class="divider bottomSpace"></div>

      <section>

        <div id="rates">
          <h2>Rates:</h2>
          <p>$30.00 per person (includes HST). Same price for children and adults.</p>
          <p>Special group rates available</p>
          <p>MasterCard, Visa, Debit accepted</p>
        </div>

        <section id="contactArea">
          <h2 class="hidden">Contact area</h2>

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
