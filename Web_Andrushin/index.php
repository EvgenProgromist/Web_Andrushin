<?php
require_once 'vendor/autoload.php';

$collection = new RoutCollection();

$collection->add(new Route("/Web_Andrushin/", "GET", IndexController::class, 'home'));
$collection->add(new Route("/Web_Andrushin/about_web", "GET", IndexController::class, 'about_web'));
$collection->add(new Route("/Web_Andrushin/poet/{id}", "GET", IndexController::class, 'poet'));



$routMatcher = new RoutMatcher($collection);
$rout = $routMatcher->match($_SERVER['REQUEST_URI']);
$class_name = $rout->getClass();
$method = $rout->getClassMethod();
$params = $rout->getParams(); // Извлекаем параметры маршрута
$controller = new $class_name();
$controller->$method();
$controller->$method($params); // Передаем параметры маршрута в контроллер

/*// Вызываем метод контроллера с параметрами
call_user_func_array([$controller, $method], $params);*/

