<?php

require_once __DIR__ . '/../vendor/autoload.php';
use App\Controllers\UserController;

$nombre = $_GET['nombre'] ?? '';
$action = $_GET['action'] ?? '';

$controller = new UserController();

if ($action === 'saludar') {
    $user = $controller->saludar($nombre);
} elseif ($action === 'despedirse') {
    $user = $controller->despedirse($nombre);
}

$json = json_encode($user, JSON_PRETTY_PRINT);
var_dump($json);

// echo 'MVC PHP Template';