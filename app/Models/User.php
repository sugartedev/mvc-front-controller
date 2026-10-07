<?php
namespace App\Models;

class User
{
    public string $nombre;
    public string $texto;

    public function __construct(string $nombre, string $texto)
    {
        $this->nombre = $nombre;
        $this->texto = $texto;
    }
}