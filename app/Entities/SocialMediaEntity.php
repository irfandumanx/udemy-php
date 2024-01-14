<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class SocialMediaEntity extends Entity
{
    protected $attributes = [
        'users_id' => null,
        'facebook' => null,
        'twitter' => null,
        'linkedin' => null,
        'website' => null,
        'github' => null,
    ];
    protected $casts = [
        'users_id' => 'int',
        'facebook' => 'string',
        'twitter' => 'string',
        'linkedin' => '?string',
        'website' => '?string',
        'github' => '?string',
    ];

    public function getValues(): array
    {
        return $this->original;
    }
}