<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Легенды русской поэзии</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../app/css/style.css">
</head>
<body>
<header>
    <!-- Шапка (navbar) -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <!-- Логотип (изображение слева) -->
            <a class="navbar-brand" href="index.php">
                <img src="./app/img/лого1.png" alt="Логотип" width="150" height="150" class="d-inline-block align-text-top">
                Легенды русской поэзии
            </a>

            <!-- Кнопка для адаптивного меню на малых экранах -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Меню навигации -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto "> <!-- Меню навигации по сайту -->
                    <li class="nav-item">
                        <a class="nav-link active" href="/Web_Andrushin/">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/Web_Andrushin/about_web">О сайте</a>
                    </li>
                </ul>
                <ul class="navbar-nav flex-column ms-auto"> <!-- Авторы, выровненные по вертикали -->
                    <li class="nav-item">
                        <a class="nav-link active">Есенин</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active">Пушкин</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active">Маяковский</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active">Лермонтов</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
