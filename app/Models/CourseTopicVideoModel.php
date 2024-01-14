<?php

namespace App\Models;

use App\Entities\UserEntity;
use CodeIgniter\Model;

class CourseTopicVideoModel extends Model
{
    protected $table = "coursetopicvideos";
    protected $allowedFields = [
        'topic_id', 'video_id', 'course_id'
    ];
}