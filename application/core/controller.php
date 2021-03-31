<?php

 class Controller {
	
	public $model;
	public $view;
    public function __construct($model){
        $this->model = $model;
		$this->view = new View($this, $model);
    }
    public function clicked() {
        $this->model->string = "Updated Data, thanks to MVC and PHP!";
    }
	
	public function action_index() {}

	/*function action_index()
	{
	}*/
}

