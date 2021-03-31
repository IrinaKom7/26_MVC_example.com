<?php

class Controller_Main extends Controller
{
	function __construct($model) {
		parent::__construct($model);
	}
	function action_index()
	{	
		//echo 'Controller_Main action_index';
		//echo var_dump($this->view);
		$this->view->generate('main_view.php', 'template_view.php');
	}
}