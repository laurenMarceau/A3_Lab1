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

    <h1>News & Events</h1>
    <p>
      Welcome to our News and Events page. Here we'll cover new projects, and give information about ongoing projects. Our Events section has news about upcoming events and things you don't want to miss. Don't forget to connect to our Facebook page as well to find out more.
      <br><br>
      Check back soon for more news about the island and updates on all of our projects. Expect to see more frequent updating during our operating season end of May to mid-September. View schedules for exact dates.
    </p>

    <section id="socialLinks">
      <h2 class="hidden">Social media</h2>
      <div id="facebook">
        <a href="https://www.facebook.com/MarineHeritageSociety">
          <i class="fa fa-facebook-square seeMore facebook" aria-hidden="true"></i>
        </a>
          <div class="socialText">
            <p><span class="socialTitle">Come Visit Us</span><br>Learn more about upcoming events</p>
          </div>
      </div>
      <div id="youtube">
        <a href="https://www.youtube.com/channel/UC5BwiLq9hSIl9BZRq7Q4UNA?feature=watch">
          <i class="fa fa-youtube-square seeMore youtube" aria-hidden="true"></i>
        </a>
          <div class="socialText">
            <p><span class="socialTitle">See More</span><br>Click here to see our Youtube videos</p>
          </div>
      </div>
    </section>

    <section id="eventSection">
    <h2>Most recent events</h2>

      <div class="events">
        <h3 class="event">Doug Johnsons 91st Birthday</h3>
        <p class="eventDesc">Doug is one of the oldest supporters of the Chantry Island project.</p>
        <div class="eventTime">Date Posted: 2017-01-10</div>
      </div>

      <div class="events">
        <h3 class="event">Marine Heritage Society / Propeller Club AGM 2016</h3>
        <p class="eventDesc">The Annual Marine Heritage Society and Propeller Club AGM will take place on Friday, November 25, 2016. Location will be at the Walker House in Southampton. Roast Beef or Chicken are the choices for food. Tickets will be on sale at the Propeller Club meetings and through Marine Heritage Board members. Continue to check postings for further information.</p>
        <div class="eventTime">Date Posted: 2016-09-30</div>
      </div>

      <div id="pageChanger">
        <div id="backArrow"></div>
        <p>1 of 3</p>
        <div id="nextArrow"></div>
      </div>
    </section>

      <div class="divider"></div>

      <section id="news">
        <h2 class="hidden">News section</h2>

        <div class="post">
          <h2 class="newsTitle">Doug Johnson Proudly Displays the Famous Saying.</h2>
          <div class="newsTime">Date Posted:2017-01-18</div>
          <div class="video">
            <img src="images/dougsHat.jpg" alt="Doug's hat photo" class="newsPhoto">
            <p class="postText"></p>
          </div>
        </div>

        <div class="post">
          <h2 class="newsTitle">Doug Johnson's 91st Birthday</h2>
          <div class="newsTime">Date Posted:2017-10-18</div>
          <div class="video">
            <img src="images/DougsBday.jpg" alt="Doug's birthday photo" class="newsPhoto">
          </div>
          <p class="postText">Doug Johnson is giving a short talk about his history with the Propeller Club. He is one of our strongest supporters.</p>
        </div>

      <div id="pageNewsChanger">
        <div id="leftArrow"></div>
        <p>1 of 15</p>
        <div id="RightArrow"></div>
      </div>

      </section>

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
