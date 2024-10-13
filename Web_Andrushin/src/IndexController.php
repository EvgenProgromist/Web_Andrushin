<?php
class IndexController
{
    public function home(): void
    {
        $poets = Poet::getAll();  // Получаем всех поэтов из модели
        include_once 'app/views/home.php';  // Отображаем представление с поэтами
    }

    // Страница поэта
    public function poet(array $params): void
    {
        // Получаем ID поэта из параметров маршрута
        if (isset($params['id'])) {
            $id = $params['id'];
            $poet = Poet->getId($id);  // Получаем поэта по ID

            if ($poet) {
                include_once 'app/views/poet.php';  // Показываем страницу поэта
            } else {
                echo "Поэт не найден!";
            }
        } else {
            echo "ID поэта не передан!";
        }
    }

    public function about_web(): void {
        include_once __DIR__ . '/../app/views/about_web.php';
    }
}

