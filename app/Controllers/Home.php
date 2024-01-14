<?php

namespace App\Controllers;

use App\Entities\UserEntity;
use App\Models\UserModel;
use CodeIgniter\Config\Services;
use CodeIgniter\HTTP\RedirectResponse;
use CodeIgniter\Validation\Validation;

class Home extends BaseController
{
    private Validation $validation;
    private UserEntity $userEntity;
    private UserModel $userModel;

    public function __construct()
    {
        $this->validation = Services::validation();
        $this->userEntity = new UserEntity();
        $this->userModel = new UserModel();
    }
    public function index(): string|RedirectResponse
    {
        if($this->request->is('POST')) {
            //register
            if ($this->request->getPost('is_register') == 'true') {
                $data = [
                    'register_email' => $this->request->getPost('register_email'),
                    'register_username' => $this->request->getPost('register_username'),
                    'register_password' => $this->request->getPost('register_password'),
                    'register_conpassword' => $this->request->getPost('register_conpassword'),
                ];
                if(!$this->validation->run($data, 'register')) {
                    $this->session->setFlashdata(['errors' => $this->validation->getErrors(), 'isRegister' => $this->request->getPost('is_register')]);
                    return view('index');
                }
                $this->userEntity->email = $data['register_email']; $this->userEntity->username = $data['register_username'];
                $this->userEntity->password = password_hash($data['register_password'], PASSWORD_DEFAULT);
                $this->userEntity->name = 'Isim'; $this->userEntity->surname = 'Yok';
                $this->userModel->insert($this->userEntity);
                if($this->userModel->errors())
                    $this->session->setFlashdata(['errors' => $this->userModel->errors(), 'isRegister' => $data['is_register']]);
                $this->session->set([
                    'userData' => [
                        'email' => $data['register_email'],
                        'username' => $data['register_username'],
                        'name' => $this->userEntity->name,
                        'surname' => $this->userEntity->surname,
                        'coverphotourl' => null,
                        'photourl' => null
                    ],
                ]);
                return view('index');
            }
            //login
            $data = [
                'login_username' => $this->request->getPost('login_username'),
                'login_password' => $this->request->getPost('login_password'),
            ];
            if(!$this->validation->run($data, 'login')) {
                $this->session->setFlashdata(['errors' => $this->validation->getErrors(), 'isRegister' => $this->request->getPost('is_register')]);
                return view('index');
            }
            $isEmail = $this->validateData(['login_username' => $data['login_username']], ['login_username' =>'valid_email']);
            $foundUser = $this->userModel->where($isEmail ? 'email' : 'username', $data['login_username'])->first();
            if(!$foundUser) {
                $this->session->setFlashdata(['errors' => ['Boyle bir kullanici bulunamadi'], 'isRegister' => $this->request->getPost('is_register')]);
                return view('index');
            }
            if(!password_verify($data['login_password'], $foundUser->password)) {
                $this->session->setFlashdata(['errors' => ['Sifre yanlis'], 'isRegister' => $this->request->getPost('is_register')]);
                return view('index');
            }

            $this->session->set([
                'userData' => [
                    'email' => $foundUser->email,
                    'username' => $foundUser->username,
                    'name' => $foundUser->name,
                    'surname' => $foundUser->surname,
                    'photourl' => $foundUser->photourl,
                    'coverphotourl' => $foundUser->coverphotourl
                ],
            ]);
            return redirect()->to(route_to('home'))->withCookies();
        }
        return view('index');
    }
}
