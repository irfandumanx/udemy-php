<?php

namespace App\Models;

use App\Entities\UserEntity;
use CodeIgniter\Model;

class CourseVideoModel extends Model
{
    protected $table = "coursevideos";
    protected $primaryKey = "id";
    protected $allowedFields = [
        'id', 'course_id', 'videourl', 'lesson_name'
    ];
}