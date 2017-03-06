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

    <h1>Donation</h1>
    <p>Since 1997 we have had a tremendous amount of support by donations. If you would like to be included please send a cheque or money order to:</p>

    <div id="orderAddress">
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
    <p>
      We are currently engaged in Fund Raising to support our New Boat, Dock Improvements, and Marine Heritage
      Projects.
      <br><br>
      We will send a tax receipt for all donations $20 and more.
    </p>
      <div class="divider"></div>

      <h2>Donor Category List</h2>

      <table id="donationChart">
        <tr>
          <th>Level</th>
          <th>Amount</th>
        </tr>
        <tr>
          <td>Shipmate</td>
          <td>$1.00 - 199.00</td>
        </tr>
        <tr>
          <td>Lifesaving Crew</td>
          <td>$200.00 - 999.00</td>
        </tr>
        <tr>
          <td>Assistant Lighthouse Crew</td>
          <td>$1,000.00 - 4,999.00</td>
        </tr>
        <tr>
          <td>Lighthouse Keepers</td>
          <td>$5,000.00 - 9,999.00</td>
        </tr>
        <tr>
          <td>Captain Lambert's Crew</td>
          <td>$10,000.00 - 25,000.00</td>
        </tr>
        <tr>
          <td>Queen Victoria's Crew</td>
          <td>$25,000.00 plus</td>
        </tr>
      </table>

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
