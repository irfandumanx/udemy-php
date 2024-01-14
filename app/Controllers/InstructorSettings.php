<?php

namespace App\Controllers;

use App\Entities\SocialMediaEntity;
use App\Models\SocialMediaModel;
use App\Models\UserModel;
use CodeIgniter\Config\Services;
use CodeIgniter\HTTP\RedirectResponse;
use CodeIgniter\Validation\Validation;

class InstructorSettings extends BaseController
{
    private Validation $validation;
    private UserModel $userModel;
    private SocialMediaModel $socialMediaModel;

    public function __construct()
    {
        $this->validation = Services::validation();
        $this->userModel = new UserModel();
        $this->socialMediaModel = new SocialMediaModel();
    }

    public function index(): string|RedirectResponse
    {
        $user = $this->userModel->where('username', session()->get('userData')['username'])->first();
        $socialMedias = $this->socialMediaModel->find($user->id);
        if($this->request->is('POST')) {
            if($this->request->getPost('socialmedia')) {
                $socialMediaEntity = new SocialMediaEntity();
                $socialMediaEntity->users_id = $user->id;
                $socialMediaEntity->facebook = $this->request->getPost('facebook'); $socialMediaEntity->twitter = $this->request->getPost('twitter');
                $socialMediaEntity->linkedin = $this->request->getPost('linkedin'); $socialMediaEntity->website = $this->request->getPost('website');
                $socialMediaEntity->github = $this->request->getPost('github');
                if ($this->socialMediaModel->find($socialMediaEntity->users_id))
                    $this->socialMediaModel->update($socialMediaEntity->users_id, $socialMediaEntity);
                else $this->socialMediaModel->insert($socialMediaEntity);
                return redirect()->to(route_to('instructorsettings'));
            }
            if($this->request->getFile('file')) {
                $isCover = $this->request->getPost('isCover') == 'true';
                $dir = APPPATH.'../public/uploads/photos/'.$user->username;
                if (!is_dir($dir)) mkdir($dir, 0777, true);
                $type = explode('/', $_FILES['file']['type'])[1];
                $filename = $isCover ? "coverphoto.".$type : "profilephoto.".$type;
                move_uploaded_file($_FILES['file']['tmp_name'], "$dir/$filename");
                $this->userModel->update($user->id, [ $isCover ? 'coverphotourl' : 'photourl' => $filename]);
                $this->session->set([
                    'userData' => $this->userModel->
                    where('username',  session()->get('userData')['username'])->
                    first()->getValues()
                ]);
                exit();
            }
            if($this->request->getPost('password')) {
                if(!password_verify($this->request->getPost('password'), $user->password)) {
                    $this->session->setFlashdata(['errors' => ['Şifre Yanlış']]);
                    return redirect()->to(route_to('instructorsettings'));
                }
                if($this->request->getPost('newpassword') !== $this->request->getPost('confirmnewpassword')) {
                    $this->session->setFlashdata(['errors' => ['Şifreler uyuşmuyor']]);
                    return redirect()->to(route_to('instructorsettings'));
                }
                if(!$this->validation->run(['password' => $this->request->getPost('newpassword')], 'changePassword')) {
                    $this->session->setFlashdata(['errors' => $this->validation->getErrors()]);
                    return redirect()->to(route_to('instructorsettings'));
                }
                $this->userModel->update($user->id, ['password' => password_hash($this->request->getPost('newpassword'), PASSWORD_DEFAULT)]);
                return redirect()->to(route_to('instructorsettings'));
            }
            $data = [
                'name' => $this->request->getPost('name'),
                'surname' => $this->request->getPost('surname'),
                'skill' => $this->request->getPost('skill'),
                'bio' => $this->request->getPost('bio'),
            ];
            if($this->request->getPost('username') !== $user->username)
                $data['username'] = $this->request->getPost('username');
            if($this->request->getPost('email') !== $user->email)
                $data['email'] = $this->request->getPost('email');
            if($this->request->getPost('phonenumber') !== $user->phonenumber)
                $data['phonenumber'] = $this->request->getPost('phonenumber');
            $this->userModel->update($user->id, $data);
            $this->session->set([
                'userData' => $this->userModel->
                where('username', $data['username'] ?? session()->get('userData')['username'])->
                first()->getValues()
            ]);
            if(isset($data['username'])) {
                $dir = APPPATH.'../public/uploads/photos/'.$user->username;
                $newDir = APPPATH.'../public/uploads/photos/'.$data['username'];
                $dir2 = APPPATH.'../public/uploads/videos/'.$user->username;
                $newDir2 = APPPATH.'../public/uploads/videos/'.$data['username'];
                if (!is_dir($dir)) mkdir($dir, 0777, true);
                if (!is_dir($dir2)) mkdir($dir2, 0777, true);
                rename($dir, $newDir);
                rename($dir2, $newDir2);
            }
            return redirect()->to(route_to('instructorsettings'));
        }
        return view('pages/instructorsettings', ['data' => array_merge($user->getValues(), $socialMedias == null ? [] : $socialMedias->getValues())]);
    }

}