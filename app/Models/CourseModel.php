<?php

namespace App\Models;

use App\Entities\CourseEntity;
use CodeIgniter\Model;

class CourseModel extends Model
{
    protected $table = "courses";
    protected $primaryKey = "id";
    protected $returnType = CourseEntity::class;
    protected $allowedFields = [
        'id', 'user_id', 'name', 'bio', 'requirements',
        'benefits', 'price', 'level', 'category', 'student', 'visible', 'coursephoto'
    ];
    protected $validationRules = [
        'name'      => 'required|min_length[3]|max_length[50]',
    ];

    protected $validationMessages = [
        'name' => [
            'required' => 'Kurs adi gereklidir',
            'min_length' => 'Kurs adi minimum 3 karakterden olusmalidir',
            'max_length' => 'Kurs adi maksimum 50 karakterden olusmalidir'
        ],
    ];
}