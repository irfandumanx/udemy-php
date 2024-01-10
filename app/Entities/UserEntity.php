<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class UserEntity extends Entity
{

    private int $id;
    private string $username;
    private string $email;
    private string $name;
    private string $surname;

    public function __get(string $key)
    {
        return $this->attributes[$key];
    }
}