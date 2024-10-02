<?php
namespace app\controllers;
require_once __DIR__.'/../../vendor/autoload.php';

use App\models\Poet;
class PageController {

    // Главная страница
    public function home() {
        $poets = Poet::getAll();  // Получаем всех поэтов из модели
        include 'app/views/home.php';  // Отображаем представление с поэтами
    }

    // Страница поэта
    public function poet($id) {
        $poet = Poet::getById($id);  // Получаем поэта по ID
        if ($poet) {
            include 'app/views/poet.php';  // Показываем страницу поэта
        } else {
            echo "Поэт не найден!";
        }
    }
}
