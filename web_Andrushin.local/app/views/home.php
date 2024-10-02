<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link  rel="stylesheet" href="../../public/css/style.css">
    <title>Легенды русской поэзии</title>
</head>
<body class="d-flex flex-column min-vh-100">
    <?php include_once __DIR__ . '/partials/header.php'; ?>

    <div class="container mb-4">
        <div class="row">
            <?php foreach ($poets as $poet): ?>
                <div class="col-md-6">
                    <a> <img src="../../public/img/<?=$poet['img'] ?>" alt="logo"> </a>
                    <h2><?= $poet['name']; ?></h2>
                    <p><?= $poet['poem']; ?></p>
                    <a href="?id=<?= $poet['id']; ?>" class="btn btn-primary">Дочитать до конца</a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <?php include_once __DIR__ . "/partials/footer.php"; ?>
</body>
</html>
