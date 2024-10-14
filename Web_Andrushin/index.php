<?php
require_once 'vendor/autoload.php';

$collection = new RoutCollection();

$collection->add(new Route("/Web_Andrushin/", "GET", IndexController::class, 'home'));
$collection->add(new Route("/Web_Andrushin/about_web", "GET", IndexController::class, 'about_web'));
$collection->add(new Route("/Web_Andrushin/poet/{id}", "GET", IndexController::class, 'poet'));
$collection->add(new Route("/Web_Andrushin/add_poet", "GET", IndexController::class, 'add_poet')); // Рендеринг формы
$collection->add(new Route("/Web_Andrushin/add_poet", "POST", IndexController::class, 'add_poet')); // Обработка формы
$collection->add(new Route("/Web_Andrushin/delete_poet", "POST", IndexController::class, 'delete_poet'));

// Сопоставляем текущий запрос с маршрутом
$routMatcher = new RoutMatcher($collection);
$rout = $routMatcher->match($_SERVER['REQUEST_URI']);

if ($rout) {
    $class_name = $rout->getClass();
    $method = $rout->getClassMethod();
    $params = $rout->getParams(); // Извлекаем параметры маршрута

    // Создаем экземпляр контроллера
    $controller = new $class_name();

    // Вызываем метод контроллера, передавая параметры, если они есть
    if (!empty($params)) {
        $controller->$method($params);  // Передаем параметры, если они существуют
    } else {
        $controller->$method();  // Вызов без параметров
    }
} else {
    // Если маршрут не найден
    header("HTTP/1.0 404 Not Found");
    echo "Страница не найдена!";
}

/*$class_name = $rout->getClass();
$method = $rout->getClassMethod();
$params = $rout->getParams(); // Извлекаем параметры маршрута
$controller = new $class_name();
$controller->$method();
$controller->$method($params); // Передаем параметры маршрута в контроллер
*/
