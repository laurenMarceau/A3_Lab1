<?php
	function logIn($username, $password, $ip) {
		require_once("connect.php");
		$username = mysqli_real_escape_string($link, $username);
		$password = mysqli_real_escape_string($link, $password);
		$loginString = "SELECT * FROM tbl_user WHERE user_name='{$username}' AND user_pass='{$password}'";
		//echo $loginString;
		$user_set = mysqli_query($link, $loginString);
		//also select date time
		$attempts = mysqli_query($link, "SELECT login_attempt, failed_attempt_time FROM `tbl_user` WHERE user_name='{$username}'");
		//to check for how many times you've tried to log in

		$foundAttempts = mysqli_fetch_array($attempts, MYSQLI_ASSOC);
		$currentTime = mktime(0, 0, 0, date("m"), date("d"),   date("Y"));
		//echo $currentTime;
		//doesn't work...
		//update current tim
		echo $foundAttempts['failed_attempt_time'];

		//check attempts and time
		//if($foundAttempts['login_attempt'] >= 3) {
			//echo "You need to wait for 10 minutes before attempting to login again";
			//this is the failure section
			//too many attempts and time is not up
			//compares the time of third failed attempt to ten mins datetime
		//}else{
			//not too many attempts and time is up
			if(mysqli_num_rows($user_set)) {
				$found_user = mysqli_fetch_array($user_set, MYSQLI_ASSOC);
				$id = $found_user['user_id'];
				$_SESSION['users_id'] = $id;
				$_SESSION['users_name'] = $found_user['user_name'];

				if(mysqli_query($link, $loginString)) {
					$updateString = "UPDATE tbl_user SET user_ip='{$ip}' WHERE user_id={$id}";
					$updateQuery = mysqli_query($link, $updateString);
				}

				$updateAttempts = "UPDATE tbl_user SET login_attempt = 0";
				redirect_to("admin_index.php");
			}else {
				$message = "Username/Password were incorrect.<br>Please make sure your caps lock key is turned off.";
				$foundAttempts['login_attempt']++;
				$attemptsUpdate = "UPDATE tbl_user SET login_attempt = {$foundAttempts['login_attempt']}";
				$updateQuery = mysqli_query($link, $attemptsUpdate);
				echo $foundAttempts['login_attempt'];
				//query to add attempt to row
				return $message;
			}
		//}



		mysqli_close($link);
	}
?>
