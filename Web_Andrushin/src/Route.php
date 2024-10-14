<?php

class Route
{
    private array $params;  // Массив параметров

    public function __construct(
        private string $url,
        private string $method,
        private string $class,
        private string $class_method,
        array $params = [] // Добавляем параметр в конструктор с дефолтным значением
    ) {
        $this->params = $params; // Инициализация params через конструктор
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function getClass(): string
    {
        return $this->class;
    }

    public function getClassMethod(): string
    {
        return $this->class_method;
    }

    // Получаем параметры маршрута
    public function getParams(): array
    {
        return $this->params;
    }

    public function setParams(array $params): void
    {
        $this->params = $params;
    }

}