<?php

namespace App\Models;

use App\Entities\UserEntity;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "users";
    protected $primaryKey = "id";
    protected $returnType = UserEntity::class;
    protected $allowedFields = [
        'username', 'email', 'password', 'name', 'surname'
    ];
    protected $validationRules = [
        'username'      => 'required|min_length[3]|max_length[30]',
        'email'         => 'required|valid_email|max_length[75]',
        'password'      => 'required',
        'name'          => 'min_length[3]',
        'surname'       => 'min_length[3]',
    ];

    protected $validationMessages = [
        'username' => [
            'required' => 'required',
            'min_length' => 'min',
            'max_length' => 'max'
        ],
        'email' => [
            'required' => 'required',
            'valid_email' => 'valid_email',
            'max_length' => 'max'
        ],
        'password' => [
            'required' => 'required',
        ],
        'name' => [
            'min_length' => 'min',
        ],
        'surname' => [
            'min_length' => 'min',
        ],
    ];
}