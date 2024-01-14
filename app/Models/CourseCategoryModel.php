<?php

namespace App\Models;

use App\Entities\CourseCategoryEntity;
use App\Entities\SocialMediaEntity;
use App\Entities\UserEntity;
use CodeIgniter\Model;

class CourseCategoryModel extends Model
{
    protected $table = "coursecategories";
    protected $primaryKey = "id";
    protected $returnType = CourseCategoryEntity::class;
    protected $allowedFields = [
        'id', 'category'
    ];
    protected $validationRules = [
        'id'      => 'required',
        'category'      => 'required',

    ];

    protected $validationMessages = [
        'id' => [
            'required' => 'Kullanici id\'si gereklidir',
        ],
        'category' => [
            'required' => 'Kategori tipi gereklidir',
        ],
    ];
}