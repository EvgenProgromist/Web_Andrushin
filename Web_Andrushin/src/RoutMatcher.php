<?php
readonly class RoutMatcher
{
    public function __construct(private RoutCollection $collection)
    {

    }

    public function match(string $url): Route
    {
        foreach ($this->collection->get_routs() as $route) {
            // Используем метод matchRoute для сопоставления маршрута с параметром
            if ($this->matchRoute($route, $url)) {
                return $route; // Если найдено соответствие, возвращаем маршрут
            }
        }
        throw new Exception('Routes not found');
    }

    private function matchRoute(Route $route, string $url): bool
    {
        // Преобразуем маршрут с параметрами в регулярное выражение
        $pattern = preg_replace('/\{[a-zA-Z0-9_]+\}/', '([a-zA-Z0-9_]+)', $route->getUrl());
        $pattern = "#^" . $pattern . "$#";  // Добавляем границы для точного совпадения URL

        if (preg_match($pattern, $url, $matches)) {
            array_shift($matches);  // Убираем первый элемент (весь URL)
            //$route->setParams($matches);  // Сохраняем параметры в маршрут
            return true;
        }

        return false;
    }
}
