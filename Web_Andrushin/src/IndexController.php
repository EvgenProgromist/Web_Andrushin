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
        if (isset($params[0])) {  // Получаем ID поэта из параметров
            $id = $params[0];

            // Получаем поэта по ID через статический метод
            $poet = Poet::getById($id);  // Предполагается, что метод getById возвращает объект поэта

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

    public function add_poet(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Получение данных из формы
            /*$id = $_POST['id'];*/
            $name = $_POST['name'];
            $name_poem = $_POST['name_poem'];
            $poem = $_POST['poem'];
            $poem1 = $_POST['poem1'];
            $img = $_POST['img'];

            // Добавление пользователя в базу данных
            Poet::add_Poet($name, $name_poem, $poem, $poem1, $img);

            // Редирект после успешного добавления
            header('Location: /Web_Andrushin/');
            exit();
        } else {
            // Отображение формы для добавления пользователя (GET-запрос)
            include __DIR__ . '/../app/views/add_poet.php';
        }
    }

    public function delete_poet(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $poetId = $_POST['poet_id'];

            // Удаляем пользователя из базы данных
            Poet::delete_Poet($poetId);

            // Редирект после удаления
            header('Location: /Web_Andrushin/');
            exit();
        }
    }
}

