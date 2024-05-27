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
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        if ($username == 'ramzi' && $password == '123') {
            
        return redirect()->to('/');
        } else {
            session()->setFlashdata('pesan', '<div class="alert alert-danger">Username atau password salah!!</div>');
            return redirect()->to('/login');
        }
        
    }

    public function logout()
    {
        # code...
    }
}
