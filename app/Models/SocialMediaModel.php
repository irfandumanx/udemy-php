<?php

namespace App\Models;

use App\Entities\SocialMediaEntity;
use App\Entities\UserEntity;
use CodeIgniter\Model;

class SocialMediaModel extends Model
{
    protected $table = "socialmedias";
    protected $primaryKey = "users_id";
    protected $returnType = SocialMediaEntity::class;
    protected $allowedFields = [
        'users_id', 'facebook', 'twitter', 'linkedin',
        'website', 'github'
    ];
    protected $validationRules = [
        'users_id'      => 'required',
    ];

    protected $validationMessages = [
        'users_id' => [
            'required' => 'Kullanici id\'si gereklidir',
        ],
    ];
}