<?php

// ini_set('display_errors', 1);
require_once 'application/bootstrap.php';

$model = new Model();
$controller = new Controller($model);
$view = new View($controller, $model);
if (isset($_GET['action']) && !empty($_GET['action'])) {
   $controller->{$_GET['action']}();
}
echo $view->output();

echo phpinfo();
?>
