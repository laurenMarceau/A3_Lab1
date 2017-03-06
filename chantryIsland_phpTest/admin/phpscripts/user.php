<?php
	function createUser($fname, $lname, $username, $password, $level){
		require_once("connect.php");
		$ip = 0;
		$userstring = "INSERT INTO tbl_user VALUES(NULL,'{$fname}','{$lname}','{$username}','{$password}','{$level}','{$ip}','{$login_attempt}','{$failed_attempt_time}')";

		//echo $userstring;
		$userquery = mysqli_query($link, $userstring);
		if($userquery){
			redirect_to("admin_index.php");
		}else {
			$message = "Oops, there was a problem setting up this new user...";
			return $message;
		}
		mysql_close($link);
	}
?>
