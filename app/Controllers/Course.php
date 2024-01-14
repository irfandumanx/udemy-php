<?php

namespace App\Controllers;

use App\Entities\CourseEntity;
use App\Models\CourseCategoryModel;
use App\Models\CourseLanguageModel;
use App\Models\CourseLevelModel;
use App\Models\CourseModel;
use App\Models\CourseTopicModel;
use App\Models\CourseTopicVideoModel;
use App\Models\CourseVideoModel;
use App\Models\LanguageModel;
use App\Models\SocialMediaModel;
use App\Models\UserModel;
use CodeIgniter\HTTP\RedirectResponse;
use CodeIgniter\HTTP\ResponseInterface;

class Course extends BaseController
{

    private UserModel $userModel;
    private CourseModel $courseModel;
    private CourseCategoryModel $courseCategoryModel;
    private CourseLanguageModel $courseLanguageModel;
    private CourseTopicModel $courseTopicModel;
    private CourseVideoModel $courseVideoModel;
    private CourseTopicVideoModel $courseTopicVideoModel;
    private CourseLevelModel $courseLevelModel;
    private LanguageModel $languageModel;
    private SocialMediaModel $socialMediaModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->courseModel = new CourseModel();
        $this->courseCategoryModel = new CourseCategoryModel();
        $this->courseLanguageModel = new CourseLanguageModel();
        $this->courseTopicModel = new CourseTopicModel();
        $this->courseVideoModel = new CourseVideoModel();
        $this->courseTopicVideoModel = new CourseTopicVideoModel();
        $this->courseLevelModel = new CourseLevelModel();
        $this->languageModel = new LanguageModel();
        $this->socialMediaModel = new SocialMediaModel();
    }
    public function createCourse(): string|ResponseInterface
    {
        $user = $this->userModel->where('username', $this->session->get('userData')['username'])->first();
        if($this->request->is('POST')) {
            $courseEntity = new CourseEntity();
            $courseEntity->user_id = $user->id;
            $courseEntity->name = $this->request->getPost('name');
            $courseEntity->bio = $this->request->getPost('bio');
            $courseEntity->requirements = $this->request->getPost('requirements');
            $courseEntity->benefits = $this->request->getPost('benefits');
            $courseEntity->price = $this->request->getPost('price');
            $courseEntity->level = $this->request->getPost('level');
            $courseEntity->category = $this->request->getPost('category');
            $courseEntity->student = $this->request->getPost('student');
            $courseEntity->visible = $this->request->getPost('visible') === 'true' ? 'Y' : 'N';
            if($this->request->getFile('file')) {
                $dir = APPPATH.'../public/uploads/photos/'.$user->username.'/'.$courseEntity->name;
                if (!is_dir($dir)) mkdir($dir, 0777, true);
                $type = explode('/', $_FILES['file']['type'])[1];
                $filename = "coursephoto.".$type;
                move_uploaded_file($_FILES['file']['tmp_name'], "$dir/$filename");
                $courseEntity->coursephoto = $filename;
            }
            $courseId = $this->courseModel->insert($courseEntity);
            foreach (explode(',', $this->request->getPost('languages')) as $value) {
                $this->courseLanguageModel->insert(['course_id' => $courseId, 'language_id' => $value]);
            }
            $data = [
                'success'    => true,
                'course_id'  => $courseId,
            ];
            return $this->response->setJSON($data);
        }
        return view('pages/createcourse', ['data' => $this->courseCategoryModel->findAll()]);
    }
    public function addVideoToCourse($courseId): string|RedirectResponse
    {
        $user = $this->userModel->where('username', $this->session->get('userData')['username'])->first();
        $course = $this->courseModel->find($courseId);
        if($course->user_id !== $user->id) exit();
        if($this->request->is('POST')) {
            if($this->request->getPost('topic')) {
                $tempDir = APPPATH . '../irfantemp';
                $finalDir = APPPATH.'../public/uploads/videos/'.$user->username.'/'.$course->name;
                $fileName = $this->request->getPost('name');
                if (!is_dir($tempDir)) mkdir($tempDir, 0777, true);
                if ($this->request->getPost('finish') === 'false') {
                    $fileIndex = $this->request->getPost('index');
                    move_uploaded_file($_FILES['file']['tmp_name'], "$tempDir/$fileName.part.$fileIndex");
                }
                else {
                    if (!is_dir($finalDir)) mkdir($finalDir, 0777, true);
                    $filePath = "$tempDir/$fileName.part.*";
                    $fileParts = glob($filePath);
                    sort($fileParts, SORT_NATURAL);
                    $finalFile = fopen("$finalDir/$fileName", 'w');
                    foreach ($fileParts as $filePart) {
                        $chunk = file_get_contents($filePart);
                        fwrite($finalFile, $chunk);
                        unlink($filePart);
                    }
                    fclose($finalFile);
                    $videoId = $this->courseVideoModel->insert(['course_id' => $courseId,
                        'videourl' => $fileName, 'lesson_name' => $this->request->getPost('lesson_name')]);
                    $topic = $this->courseTopicModel->where('name', $this->request->getPost('topic'))->first();
                    $this->courseTopicVideoModel->insert(['course_id' => $courseId ,
                        'topic_id' => $topic['id'], 'video_id' => $videoId]);
                }
                exit();
            }
            $this->courseTopicModel->insert(['name' => $this->request->getPost('name'), 'course_id' => $course->id]);
            exit();
        }
        return view('pages/addvideotocourse', ['topics' => $this->getTopics($courseId)]);
    }

    public function courseDetails($courseId): string
    {
        $course = $this->courseModel->find($courseId);
        if($course->visible == 'N') return view('index');
        $courseOwner = $this->userModel->find($course->user_id)->getValues();
        $courseCategory = $this->courseCategoryModel->find($course->category)->category;
        $courseLevel = $this->courseLevelModel->find($course->level)['level'];
        $courseLanguagesId = $this->courseLanguageModel->where('course_id', $courseId)->findAll();
        $courseLanguages = [];
        foreach ($courseLanguagesId as $courseLanguageId) {
            $courseLanguages[] = $this->languageModel->find($courseLanguageId['language_id'])['language'];
        }
        $courseData = array_merge($course->getValues(), ['category' => $courseCategory], ['level' => $courseLevel], ['languages' => $courseLanguages]);
        $topics = $this->getTopics($courseId);
        $courseOwner['socialmedias'] = $this->socialMediaModel->where('users_id', $courseOwner['id'])->first()->getValues();
        $lectureCount = count($this->courseVideoModel->where('course_id', $courseId)->findAll());
        return view('pages/coursedetails', ['course' => $courseData, 'owner' => $courseOwner, 'topics' => $topics, 'lectureCount' => $lectureCount]);
    }

    public function watchCourse($courseId): string
    {
        $course = $this->courseModel->find($courseId);
        return view('pages/coursewatch', ['course' => $course->getValues() ,'topics' => $this->getTopics($courseId)]);
    }

    public function courses(): string
    {
        $courses = $this->courseModel->findAll();
        foreach ($courses as $course) {
            $course->lessonCount = count($this->courseVideoModel->where('course_id', $course->id)->findAll());
            $course->owner = $this->userModel->find($course->user_id);
        }
        return view('pages/courses', ['courseCount' => count($courses), 'courses' => $courses]);
    }

    public function getVideoUrl($videoId): ResponseInterface
    {
        $video = $this->courseVideoModel->find($videoId);
        $course = $this->courseModel->find($video['course_id']);
        $username = $this->userModel->find($course->user_id)->username;
        $data = [
            'success'    => true,
            'video_url'  => base_url() . 'uploads/videos/'.$username.'/'.$course->name.'/'.$video['videourl'],
        ];
        return $this->response->setJSON($data);
    }

    function getTopics($courseId): array
    {
        $topics = $this->courseTopicModel->where('course_id', $courseId)->findAll();
        foreach ($topics as $key => $value) {
            $topicVideos = $this->courseTopicVideoModel->where('topic_id', $value['id'])->findAll();
            foreach ($topicVideos as $value1) {
                $video = $this->courseVideoModel->find($value1['video_id']);
                if (isset($topics[$key]['urls'])) {
                    $topics[$key]['urls'][] = $video['videourl'];
                    $topics[$key]['names'][$video['id']] = $video['lesson_name'];
                }
                else {
                    $topics[$key]['urls'] = [$video['videourl']];
                    $topics[$key]['names'] = [$video['id'] => $video['lesson_name']];
                }

            }
        }
        return $topics;
    }

}