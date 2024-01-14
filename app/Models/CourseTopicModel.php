<?php

namespace App\Models;

use App\Entities\UserEntity;
use CodeIgniter\Model;

class CourseTopicModel extends Model
{
    protected $table = "coursetopics";
    protected $primaryKey = "id";
    protected $allowedFields = [
        'id', 'course_id', 'name',
    ];
}