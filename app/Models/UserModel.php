<?php

namespace App\Models;

use App\Entities\UserEntity;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "users";
    protected $primaryKey = "id";
    protected $returnType = UserEntity::class;
    protected $allowedFields = [
        'username', 'email', 'password', 'name', 'surname',
        'phonenumber', 'skill', 'bio', 'photourl', 'coverphotourl'
    ];
    protected $validationRules = [
        'username'      => 'required|min_length[3]|is_unique[users.username]|max_length[30]',
        'email'         => 'required|valid_email|is_unique[users.email]|max_length[75]',
        'password'      => 'required',
        'phonenumber'   => 'is_unique[users.phonenumber]',
        //'name'          => 'min_length[3]',
        //'surname'       => 'min_length[3]',
    ];

    protected $validationMessages = [
        'username' => [
            'required' => 'Kullanici adi gereklidir',
            'is_unique' => 'Bu kullanici adi kullaniliyor',
            'min_length' => 'Kullanici adi minimum 3 karakterden olusmalidir',
            'max_length' => 'Kullanici adi maksimum 30 karakterden olusmalidir'
        ],
        'email' => [
            'required' => 'Email gereklidir',
            'is_unique' => 'Bu mail adresi kullaniliyor',
            'valid_email' => 'Email formatini duzgun giriniz',
            'max_length' => 'Email maksimum 75 uzunlugunda olabilir'
        ],
        'password' => [
            'required' => 'Sifre alani gereklidir',
        ],
        'phonenumber' => [
            'is_unique' => 'Bu telefon numarası kullanılıyor',
        ],
        /*'name' => [
            'min_length' => 'min',
        ],
        'surname' => [
            'min_length' => 'min',
        ],*/
    ];
}