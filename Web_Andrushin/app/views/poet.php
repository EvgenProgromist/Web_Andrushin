<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/app/css/style.css">
    <title><?= $poet['name'] ?></title>
</head>
<body class="d-flex flex-column min-vh-100">
<?php include_once __DIR__ . '/partials/header.php'; ?>

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="row text-center">
        <div class="col-12">
            <a>
                <img src="./app/img/<?=$poet['img'] ?>" alt="Изображение поэта" class="img-fluid" style="max-width: 300px;">
            </a>
        </div>

        <div class="col-12">
            <h1><?= $poet['name'] ?></h1>
            <h2><?= $poet['name_poem'] ?></h2>
            <p><?= nl2br($poet['poem1']) ?></p>
        </div>

        <!-- Ссылка назад -->
        <div class="col-12">
            <a href="/Web_Andrushin/" class="btn btn-primary mt-3">Назад</a>
        </div>
    </div>
</div>

</body>
</html>
