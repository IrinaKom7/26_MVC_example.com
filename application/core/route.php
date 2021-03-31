<?php

/* Класс - маршрутизатор для определения запрашиваемой страницы.
> цепляет классы контроллера и моделей;
> создает экземпляры контроллеров страниц и вызывает действия этих контроллеров.
*/

class Route
{
		
	static function start()
	{
		function ErrorPage404($err_text)
		{

			$host = 'http://'.$_SERVER['HTTP_HOST'].'/';
			header('HTTP/1.1 404 Not Found');
			header("Status: 404 Not Found");
			header('Location:' . $host. '404' );



		};
		// контроллер и действие по умолчанию
		$controller_name = 'main';
		$action_name = 'index';
		
        // В элементе этого глобального массива содержится полный адрес по которому обратился пользователь
		//(explode('/', $_SERVER['REQUEST_URI'])); 
		$routes = explode('/', $_SERVER['REQUEST_URI']); 

		// получаем имя контроллера
		if ( !empty($routes[1]) )
		{	
			$controller_name = $routes[1];
		}
		
		// получаем имя экшена
		if ( !empty($routes[2]) )
		{
			$action_name = $routes[2];
		}

		// добавляем префиксы
		$model_name = 'Model_' . $controller_name;
		$view_name = $controller_name . '_View';
		$controller_name = 'Controller_' . $controller_name;
		$action_name = 'action_' . $action_name;

		// подцепляем файл с классом модели (файла модели может и не быть)

		$model_file = strtolower($model_name).'.php';
		$model_path = "application/models/".$model_file;
		if(file_exists($model_path))
		{
			include $model_path;
		}

		// подцепляем файл с классом контроллера
		$controller_file = strtolower($controller_name).'.php';
		$controller_path = "application/controllers/" . $controller_file;
		if(file_exists($controller_path))
		{
			include $controller_path;
		}
		else
		{
			/*
			правильно было бы кинуть здесь исключение,
			но для упрощения сразу сделаем редирект на страницу 404
			*/

			ErrorPage404($controller_name);
		}
	
		// создаем контроллер
		$controller = new $controller_name($model_name);
		$action = $action_name;
		
		if(method_exists($controller, $action))
		{
			// вызываем действие контроллера
			$controller->$action();
		}
		else
		{
			// здесь также разумнее было бы кинуть исключение
			ErrorPage404('action');
		}
	
	}
	

}
