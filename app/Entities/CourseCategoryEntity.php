<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class CourseCategoryEntity extends Entity
{
    protected $attributes = [
        'id' => null,
        'category' => null,
    ];
    protected $casts = [
        'id' => 'int',
        'category' => 'string',
    ];

    public function getValues(): array
    {
        return $this->original;
    }
}