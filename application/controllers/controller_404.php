<?php

class Controller_404 extends Controller
{
	function __construct()
	{
		$this->model = new Model_404();
		$this->view = new View($this, $this->model);
	}
	function action_index()
	{
		$this->view->generate('404_view.php', 'template_view.php', $this->model->err_str);
	}

}
