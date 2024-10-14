<?php
readonly class RoutMatcher
{
    public function __construct(private RoutCollection $collection)
    {
    }

    public function match(string $url): Route
    {
        foreach ($this->collection->get_routs() as $route) {
            if ($this->matchRoute($route, $url)) {
                return $route; // Возвращаем найденный маршрут
            }
        }

        throw new Exception('Route not found');
    }

    private function matchRoute(Route $route, string $url): bool
    {
        // Преобразуем маршрут с параметрами в регулярное выражение
        $pattern = preg_replace('/\{[a-zA-Z0-9_]+\}/', '([a-zA-Z0-9_]+)', $route->getUrl());
        $pattern = "#^" . $pattern . "$#";  // Добавляем границы

        if (preg_match($pattern, $url, $matches)) {
            array_shift($matches);  // Убираем первый элемент (весь URL)

            // Сохраняем параметры в маршрут
            $route->setParams($matches);

            return true;
        }

        return false;
    }
}

