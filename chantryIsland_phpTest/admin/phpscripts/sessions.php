<?php
	session_start();
	//listens for session to be started
	
	function confirm_logged_in() {
		if(!isset($_SESSION['users_id'])) {
			redirect_to("admin_login.php");
		}
	}

	function logged_out() {
		session_destroy();
		redirect_to("../admin_login.php");
	}
?>