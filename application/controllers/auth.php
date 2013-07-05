<?php

class Auth extends Controller {

	function index($test,$var2)
	{

		echo $test;
		echo $var2;
		//var_dump($this->post());

		$this->loadView('templates/header_template')->render();

		$data = array('mydata' =>  'This is a test', "mydata2" => "mydata2 value" );

		$template = $this->loadView('main_view');

		$template->set("testset", $data);
		$template->render();
	}

}