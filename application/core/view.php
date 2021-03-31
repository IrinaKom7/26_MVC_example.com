<?php

class View {
	//public $template_view; // здесь можно указать общий вид по умолчанию.
	
	private $model;
    private $controller;
	
    public function __construct($controller, $model) {
        $this->controller = $controller;
        $this->model = $model;
    }
    public function output() {
        return '<p><a href="mvc.php?action=clicked"' . $this->model->string . "</a></p>";
    }

	function generate($content_view, $template_view, $data = null)
	{
		/*
		if(is_array($data)) {
			// преобразуем элементы массива в переменные
			extract($data);
		}
		*/	
		include 'application/views/' . $template_view;
	}
}
