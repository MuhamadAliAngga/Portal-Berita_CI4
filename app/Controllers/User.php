<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class User extends BaseController
{
    function __construct()
    {
        $this->user = new UserModel;    
    }
    public function index()
    {
        $data = [
            'data' => $this->user->findAll()
        ];
        return view('user', $data);
    }

    public function insert()
    {
        $data = [
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
            'akses' => $this->request->getVar('akses'),
        ];

        $this->user->insert($data);
        return redirect()->to(site_url('/user'));
    }
}
