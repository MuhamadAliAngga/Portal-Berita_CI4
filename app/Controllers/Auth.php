<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Auth extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Login Admin Portal'
        ];
        return view('login', $data);
    }

    public function prosesLogin()
    {
        # code...  
    }

    public function logout()
    {
        # code...
    }
}
