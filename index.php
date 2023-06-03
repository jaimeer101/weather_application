<?php
	if (!session_id()) @session_start();
	define("TITLE", "WEATHER APPLICATION");
	date_default_timezone_set('Asia/Manila');
	include("classes/my_functions.php");
	if (isset($_GET['controller']) && isset($_GET['action'])) {
		$controller = $_GET['controller'];
		$action     = $_GET['action'];
	} else {
		$controller = 'pages';
		$action     = 'index';
	}
	include("configs/routes.php");
?>