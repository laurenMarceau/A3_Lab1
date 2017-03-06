<?php
	require_once("phpscripts/init.php");
	//confirm_logged_in();
	if(isset($_POST['submit'])) {
		//echo "works";
		$fname = trim($_POST['fname']);
		$lname = trim($_POST['lname']);
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$level = $_POST['lvllist'];
		if(empty($level)) {
			//echo "Level not selected";
			$message = "Please select a user level.";
		}else{
			//echo "Level Selected";
			$result = createUser($fname, $lname, $username, $password, $level);
			$message = $result;
		}
	}

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Register</title>
<link href="../css/foundation.min.css" rel="stylesheet" type="text/css" media="screen">
<link href="../css/main.css" rel="stylesheet" type="text/css" media="screen">
</head>
<body>
	<div id="registerForm" class="large-offset-2 large-8">
	<h1>Create user</h1>
	<?php if (!empty($message)){echo $message;} ?>
	<form action="admin_createuser.php" method="post">
			<label>First Name:</label>
			<input type="text" name="fname" value="<?php if(!empty($fname)) {echo $fname;} ?>">
			<br><br>
			<label id="passSpace">Last Name:</label>
			<input type="text" name="lname" value="<?php if(!empty($lname)) {echo $lname;} ?>">
			<br><br>
			<label>Username:</label>
			<input name="username" type="text" value="<?php if(!empty($username)) {echo $username;} ?>">
			<br><br>
			<label>Password:</label>
			<input name="password" type="text" value="<?php if(!empty($password)) {echo $password;} ?>">
			<br><br>
			<select name="lvllist">
					<option value="">Please select user level...</option>
					<option value="2">Web Admin</option>
					<option value="1">Web Master</option>
			</select>
			<br><br>
			<input type="submit" name="submit" value="Create User">
	</form>
	<br><br>
	<a href="admin_index.php">Back to Admin Panel</a>
</div>

		<script src="../js/vendor/jquery.min.js"></script>
		<script src="../js/vendor/what-input.min.js"></script>
		<script src="../js/foundation.min.js"></script>
		<script src="../js/TweenLite.min.js"></script>
		<script src="../js/TweenMax.min.js"></script>
		<script src="../js/ScrollToPlugin.min.js"></script>
		<script src="../js/main.js"></script>
</body>
</html>
