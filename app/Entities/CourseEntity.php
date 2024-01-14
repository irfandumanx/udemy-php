<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class CourseEntity extends Entity
{
    protected $attributes = [
        'id' => null,
        'user_id' => null,
        'name' => null,
        'bio' => null,
        'requirements' => null,
        'benefits' => null,
        'price' => null,
        'level' => null,
        'category' => null,
        'student' => null,
        'visible' => null,
        'coursephoto' => null,
    ];
    protected $casts = [
        'id' => 'int',
        'user_id' => 'int',
        'name' => 'string',
        'bio' => '?string',
        'requirements' => '?string',
        'benefits' => '?string',
        'price' => 'string',
        'level' => 'int',
        'category' => 'int',
        'student' => 'int',
        'visible' => 'string',
        'coursephoto' => '?string',
    ];

    public function getValues(): array
    {
        return $this->original;
    }
}