<?php

class Controller {
	
	private $post_data, $get_data;

	public function loadModel($name)
	{
		require(APP_DIR .'models/'. strtolower($name) .'.php');

		$model = new $name;
		return $model;
	}

	public function loadView($name)
	{
		$view = new View($name);
		return $view;
	}
	
	public function loadPlugin($name)
	{
		require(APP_DIR .'plugins/'. strtolower($name) .'.php');
	}
	
	public function loadHelper($name)
	{
		require(APP_DIR .'helpers/'. strtolower($name) .'.php');
		$helper = new $name;
		return $helper;
	}
	
	public function redirect($loc)
	{
		global $config;
		
		header('Location: '. $config['base_url'] . $loc);
	}
    
    public function post() {

    	global $config;
		
    	if ($_POST) {
			$_SESSION['post_data'] = $_POST;
			header('Location: '. $_SERVER['REQUEST_URI']);
    	}
    	else {
    		if (isset($_SESSION['post_data'])) {
				$this->post_data = $_SESSION['post_data'];
				unset($_SESSION['post_data']);
				return $this->post_data;
    		}
 			else {
 				return false;
 			}

    	}
    }

}

?>