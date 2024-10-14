<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link  rel="stylesheet" href="../../app/css/style.css">
    <title>Легенды русской поэзии</title>
</head>
<body class="d-flex flex-column min-vh-100">
    <?php include_once __DIR__ . '/partials/header.php'; ?>

    <div class="container mb-4">
        <div class="row">
            <?php foreach ($poets as $poet): ?>
                <?php $imgPath = "./app/img/" . $poet->getImg(); ?> <!-- Используем метод getImg() -->
                <div class="col-md-6 mb-4">
                    <form action="/Web_Andrushin/delete_poet" method="POST" style="display: inline;">
                        <input type="hidden" name="poet_id" value="<?= $poet->getId() ?>">
                        <a> <img src="<?= $imgPath ?>" alt="logo" width="250" height="300"> </a>
                        <h2><?= $poet->getName(); ?></h2>
                        <p><?= $poet->getNamePoem(); ?></p>
                        <p><?= $poet->getPoem(); ?></p>
                        <p><?= nl2br($poet->getPoem1()); ?></p>  <!-- nl2br для переноса строк -->
                        <a href="/Web_Andrushin/poet/<?= $poet->getId(); ?>" class="btn btn-primary">Дочитать до конца</a> <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <?php include_once __DIR__ . "/partials/footer.php"; ?>
</body>
</html>
