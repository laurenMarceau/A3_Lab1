<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);
	//delete this when website goes live, you never want to show the errors on live site
	date_default_timezone_set('EST');

	require_once("phpscripts/init.php");

	$ip = $_SERVER["REMOTE_ADDR"];
	//echo $ip;
	//this is how you grab the users IP address

	if(isset($_POST['submit'])) {
		//echo "Thanks for clicking...";
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);

		if($username !="" && $password != "") {
			$result= logIn($username, $password, $ip);
			$message = $result;
		}else{
			$message = "**Please fill in the required fields.";
		}
	}


?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Client Login</title>
<link href="../css/foundation.min.css" rel="stylesheet" type="text/css" media="screen">
<link href="../css/main.css" rel="stylesheet" type="text/css" media="screen">
</head>
<body>
	<a href="../home.html">
		<img src="../images/chantryIsland_logo.svg" alt="Chantry Island Tour" id="signInLogo">
	</a>
	<section id="signInForm" class="large-offset-2 large-8">
		<div id="timeCon" class="large-5 columns">
			<img src="../images/Southampton_mouthOfSaugeenRiver2.jpg" alt="Photo of Chantry Island" id="timePhoto">

			<?php
			$hour = date('G');
			//hour is set up to be the hour of the day and G is 0-24
			if ($hour < 10) $timeImg = '../images/morningIcon.svg';
			else if ($hour < 17) $timeImg = '../images/afternoonIcon.svg';
			else $timeImg = '../images/nightIcon.svg';

			if ($hour < 10) $greeting = "Good morning!";
			else if ($hour < 17) $greeting = "Good afternoon!";
			else $greeting = "Good evening!";
			?>

			<img src="<?php echo $timeImg; ?>"alt="Time of day icon" id="timeIcon">
			<p><?php echo $greeting ?></p>
		</div>
		<form action="admin_login.php" method="post" class="large-7 columns">
			<div id="signInCon">
				<h1>Admin Sign-in</h1>
				<div id="echoMessageStyle">
					<?php if(!empty($message)) {echo $message;} ?>
				</div>
				<label>Username:</label>
				<input type="text" name="username" value="" id="" class="inputField">
				<label id="passSpace">Password:</label>
				<input type="password" name="password" value="" class="inputField">
				<input type="submit" name="submit" value="Login" id="loginButton">
			</div>
		</form>
	</section>

		<script src="../js/vendor/jquery.min.js"></script>
		<script src="../js/vendor/what-input.min.js"></script>
		<script src="../js/foundation.min.js"></script>
		<script src="../js/TweenLite.min.js"></script>
		<script src="../js/TweenMax.min.js"></script>
		<script src="../js/ScrollToPlugin.min.js"></script>
		<script src="../js/main.js"></script>
</body>
</html>
