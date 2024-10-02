<?php

// Подключаем Composer автозагрузчик
require_once __DIR__ . '/vendor/autoload.php';
//require 'app/controllers/PageController.php';
//require 'app/models/Poet.php';

// Роутинг по запросам
use App\controllers\PageController;

$controller = new PageController();

// Простой роутинг на основе GET-параметров
if (isset($_GET['id'])) {
    // Если передан ID поэта, показываем страницу поэта
    $controller->poet($_GET['id']);
} else {
    // Иначе показываем главную страницу
    $controller->home();
}

?>
