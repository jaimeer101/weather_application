<?php
	class PagesController{
		public function index(){
			$title = "Home";
			$page = "home";
			require_once('views/layouts/layout_main.php');
		}
		
		public function error(){
			echo "error";
		}
	}
?>