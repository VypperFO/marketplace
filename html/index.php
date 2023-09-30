<?php
session_start();
spl_autoload_register(function ($classname) {
    $path = __DIR__ . '/../' . $classname . '.php';
    $path = str_replace(['/', '\\'], DIRECTORY_SEPARATOR, $path);
    if (file_exists($path)) {
        include $path;
    }
});

header("Content-Security-Policy: default-src 'self' cdn.jsdelivr.net;");
require __DIR__ . '/../migration/migration01.php';

$parts = explode("/", $_SERVER["REQUEST_URI"]);
$controllerName = $parts[1] ?: 'Home';
$actionName = $parts[2] ?? 'index';

$actionName = strtolower($actionName);
$controllerName = ucwords(strtolower($controllerName));
$controllerName = "\\Controller\\{$controllerName}Controller";
if (class_exists($controllerName)) {
    $controller = new $controllerName();
    if (method_exists($controller, $actionName)) {
        $controller->$actionName();
    } else {
        require __DIR__ . '/../views/templates/error.php';
    }
} else {
    require __DIR__ . '/../views/templates/error.php';
}
