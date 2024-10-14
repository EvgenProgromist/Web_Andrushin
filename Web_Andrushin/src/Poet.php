<?php
readonly class Poet
{
    private int $id;
    private string $name;
    private string $name_poem;
    private string $poem;
    private string $poem1;

    private string $img;

    // Конструктор
    public function __construct(int $id, string $name, string $name_poem, string $poem, string $poem1, string $img)
    {
        $this->id = $id;
        $this->name = $name;
        $this->name_poem = $name_poem;
        $this->poem = $poem;
        $this->poem1 = $poem1;
        $this->img = $img;
    }

    // Геттеры
    public function getId(): int
    {
        return $this->id;
    }

    public static function getById(int $id): ?Poet
    {
        $pdo = Database::getInstance()->getPDO();
        $stmt = $pdo->prepare("SELECT * FROM poet WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $row = $stmt->fetch();

        if ($row) {
            return new self($row['id'], $row['name'], $row['name_poem'], $row['poem'], $row['poem1'], $row['img']);
        }

        return null;  // Если поэт не найден, возвращаем null
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getNamePoem(): string
    {
        return $this->name_poem;
    }

    public function getPoem(): string
    {
        return $this->poem;
    }

    public function getPoem1(): string
    {
        return $this->poem1;
    }

    public function getImg()
    {
        return $this->img;
    }


    // Метод получения всех поэтов из базы данных
    public static function getAll(): array
    {
        $pdo = Database::getInstance()->getPDO();
        $stmt = $pdo->query("SELECT * FROM poet");
        $poets = [];

        while ($row = $stmt->fetch()) {
            $poets[] = new self($row['id'], $row['name'], $row['name_poem'], $row['poem'], $row['poem1'], $row['img']);
        }

        return $poets;
    }

    // Метод для добавления нового пользователя в базу данных
    public static function add_Poet(string $name, string $name_poem, string $poem, string $poem1, string $img): void
    {
        $pdo = Database::getInstance()->getPDO();

        // Подготовка SQL-запроса для добавления нового пользователя
        $stmt = $pdo->prepare("INSERT INTO poet (name, name_poem, poem, poem1, img) VALUES (:name, :name_poem, :poem, :poem1, :img)");

        // Привязка параметров и выполнение запроса
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':name_poem', $name_poem);
        $stmt->bindParam(':poem', $poem);
        $stmt->bindParam(':poem1', $poem1);
        $stmt->bindParam(':img', $img);

        $stmt->execute();
    }

    public static function delete_Poet(int $poetId): void
    {
        $pdo = Database::getInstance()->getPDO();

        // SQL-запрос на удаление пользователя
        $stmt = $pdo->prepare("DELETE FROM poet WHERE id = :id");
        $stmt->execute(['id' => $poetId]);
    }
}

