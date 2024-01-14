<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class UserEntity extends Entity
{
    protected $attributes = [
        'id' => null,
        'email' => null,
        'username' => null,
        'password' => null,
        'name' => null,
        'surname' => null,
    ];
    protected $casts = [
        'id' => 'int',
        'email' => 'string',
        'username' => 'string',
        'password' => 'string',
        'name' => '?string',
        'surname' => '?string',
    ];

    public function getValues(): array
    {
        return $this->original;
    }
}