<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------

    public array $register = [

        'register_email' => [
            'rules' => 'required|valid_email',
            'errors' => [
                'required' => 'Email alani zorunludur.',
                'valid_email' => 'Email formatini dogru giriniz.'
            ],
        ],

        'register_username' => [
            'rules' => 'required|min_length[3]',
            'errors' => [
                'required' => 'Kullanici adi alani zorunludur.',
                'min_length' => 'Kullanici adi minumum 3 karakterden olusmalidir.'
            ],
        ],

        'register_password' => [
            'rules' => 'required|min_length[3]',
            'errors' => [
                'required' => 'Sifre alani zorunludur.',
                'min_length' => 'Sifre minumum 3 karakterden olusmalidir.'
            ],
        ],

        'register_conpassword' => [
            'rules' => 'required|min_length[3]|matches[register_password]',
            'errors' => [
                'required' => 'Onay Sifre alani zorunludur.',
                'min_length' => 'Onay Sifre minumum 3 karakterden olusmalidir.',
                'matches' => 'Sifreler uyusmak zorundadir.'
            ],
        ],
    ];

    public array $login = [

        'login_username' => [
            'rules' => 'required|min_length[3]',
            'errors' => [
                'required' => 'Kullanici adi alani zorunludur.',
                'min_length' => 'Kullanici adi minimum 3 karakterden olusmali.'
            ],
        ],

        'login_password' => [
            'rules' => 'required|min_length[3]',
            'errors' => [
                'required' => 'Sifre alani zorunludur.',
                'min_length' => 'Sifre minumum 3 karakterden olusmalidir.'
            ],
        ],
    ];

    public array $changePassword = [

        'password' => [
            'rules' => 'required|min_length[3]',
            'errors' => [
                'required' => 'Sifre alani zorunludur.',
                'min_length' => 'Sifre minumum 3 karakterden olusmalidir.'
            ],
        ],
    ];

}
