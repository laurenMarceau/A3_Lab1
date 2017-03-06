<?php
	require_once("phpscripts/init.php");
	//confirm_logged_in();

	//replaces the last successful login datetime column in here after so it doesn't wipe previous successful login
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome to the admin panel</title>
<link href="../css/foundation.min.css" rel="stylesheet" type="text/css" media="screen">
<link href="../css/main.css" rel="stylesheet" type="text/css" media="screen">
</head>
<body>
	<section id="welcomeTopBar">
		<h1 class="large-9 columns">Welcome to the admin panel</h1>
		<div id="echoUserStyle" class="large-2 columns">
			<div id="onlineCircle">
			</div>
			<?php echo $_SESSION ['users_name']; ?> |
		</div>
		<a id="logoutLink" href="phpscripts/caller.php?caller_id=logout"  class="large-1 columns">Log Out</a>
		<a href="admin_createuser.php">Create User</a>
	</section>

	<section id="options">
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
