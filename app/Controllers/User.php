<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class User extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Admin',
            'subtitle' => 'User'
        ];
        return view('/user', $data);

    }
}
