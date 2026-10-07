<?php

namespace App\Controllers;
use App\Models\User;

class UserController
{
    public function saludar(string $nombre): User
    {
        $texto = "Hola, soy {$nombre} desde el método SALUDAR del controlador USER.";

        return new User($nombre, $texto);
    }

    public function despedirse(string $nombre): User
    {
        $texto = "Soy {$nombre}, Adios desde el método DESPEDIRSE del controlador USER.";

        return new User($nombre, $texto);
    }
}