<?php

namespace App\Models;

use App\Entities\UserEntity;
use CodeIgniter\Model;

class CourseLevelModel extends Model
{
    protected $table = "courselevels";
    protected $allowedFields = [
        'id', 'level',
    ];
}