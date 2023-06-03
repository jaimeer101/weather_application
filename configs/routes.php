<?php
	function call($controller, $action) {
		$newController = ucfirst($controller);
		require_once('controllers/' . $newController . 'Controller.php');
		
		switch($controller) {
			case 'pages':
				$controller = new PagesController();
			break;
			
			case 'actions':
				
				$controller = new ActionsController();
			break;
			
			case 'ajax':
				$controller = new AjaxController();
			break;
			
			case 'downloads':
				$controller = new DownloadsController();
			break;

		}
		$controller->{ $action }();
	}
	$controllers = array(
		"pages" => array(
			"index", 
			"error"
		), 
		"ajax" => array(
			"load_search_result"
		)
	);
	
	if (array_key_exists($controller, $controllers)) {
		call($controller, $action);
	}
	else{
		call('pages', 'error');
	}
?>