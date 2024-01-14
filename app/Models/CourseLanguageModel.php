<?php

namespace App\Models;

use App\Entities\UserEntity;
use CodeIgniter\Model;

class CourseLanguageModel extends Model
{
    protected $table = "courselanguages";
    protected $allowedFields = [
        'course_id', 'language_id',
    ];
}