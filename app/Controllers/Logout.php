<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RedirectResponse;

class Logout extends BaseController
{
    public function index(): RedirectResponse
    {
        $this->session->destroy();
        return redirect()->to(route_to('home'));
    }
}
