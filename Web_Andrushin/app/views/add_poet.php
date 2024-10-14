<body class="d-flex flex-column min-vh-100">
<header>
    <?php require_once __DIR__ . '/../views/partials/header.php'; ?>
</header>

<form action="/Web_Andrushin/add_poet" method="POST" class="p-4 border rounded shadow-sm">
    <div class="mb-3">
        <label for="name" class="form-label">ФИО писателя:</label>
        <input type="text" id="name" name="name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="name_poem" class="form-label">Название стиха:</label>
        <input type="text" id="name_poem" name="name_poem" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="poem" class="form-label">Первоя строка стиха:</label>
        <input type="text" id="poem" name="poem" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="poem1" class="form-label">Стих:</label>
        <textarea id="poem1" name="poem1" class="form-control" rows="5" required></textarea>
    </div>
    <div class="mb-3">
        <label for="img" class="form-label">Картина автора:</label>
        <input type="text" id="img" name="img" class="form-control" required>
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Добавить писателя</button>
    </div>
</form>
</body>
