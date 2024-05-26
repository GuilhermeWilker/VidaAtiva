<?php

declare(strict_types=1);

namespace app\core;

class Router
{
    private array $routes = [];

    public function add(string $route, string $method, string $action): void
    {
        $this->routes[] = [
            'route' => $route,
            'method' => $method,
            'action' => $action
        ];
    }

    public function resolve(string $requestUri, string $requestMethod)
    {
        foreach ($this->routes as $route) {
            if ($route['method'] !== $requestMethod) {
                continue;
            }

            $pattern = $this->convertToPattern($route['route']);
            if (preg_match($pattern, $requestUri, $matches)) {
                array_shift($matches); // Remove the full match
                return [
                    'action' => $route['action'],
                    'params' => $matches
                ];
            }
        }
        return null;
    }

    private function convertToPattern(string $route): string
    {
        $pattern = preg_replace('/\//', '\/', ltrim($route, '/'));
        $pattern = preg_replace('/:int/', '(\d+)', $pattern);
        $pattern = preg_replace('/:str/', '([a-zA-Z]+)', $pattern);
        $pattern = preg_replace('/:any/', '([\w\-]+)', $pattern);
        return '/^' . $pattern . '$/';
    }
}
