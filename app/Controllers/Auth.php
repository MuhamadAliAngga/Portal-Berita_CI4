<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Auth extends BaseController
{
    public function __construct()
    {
        $this->user = new UserModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Login Admin Portal'
        ];
        return view('login', $data);
    }

    public function login()
    {
        $username = $this->request->getVar('username');
        $password = md5($this->request->getVar('password'));

        $data = $this->user->where('username', $username)->first();

        if ($password == '' || $data == '') {
            $sessError = [
                'error' => 'Username dan Password harus diisi!!'
            ];
            session()->setFlashdata($sessError);
            return redirect()->to('/login');
        } elseif ($password == $data['password']) {
            $simpan_session = [
                'id_user' => $data['id_user'],
                'username' => $data['username'],
                'akses' => $data['akses']
            ];
            session()->set($simpan_session);
            $pesan = [
                'berhasil' => 'Selamat Datang'
            ];
            session()->setFlashdata($pesan);
            return redirect()->to('dashboard');
        } else {
            $sessError = [
                'error' => 'Username atau Password salah!!'
            ];
            session()->setFlashdata($sessError);
            return redirect()->to('/login');
        }
    }


    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
