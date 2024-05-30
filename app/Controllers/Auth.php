<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Auth extends BaseController
{
    public function __construct() {
        $this->user = new UserModel();
    }
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
            return redirect()->to('/');
        } else {
            $sessError = [
                'error' => 'Username atau Password salah!!'
            ];
            session()->setFlashdata($sessError);
            return redirect()->to('/login');
        }
        
        
    }

    public function cekUser()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $validation = \Config\Services::validation();

        $valid = $this->validate([
            'user' => [
                'label'  => 'Username',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'pass' => [
                'label'  => 'Password',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ] 
            ] 
        ]);

        if (!$valid) {
            $sessError = [
                'errUser'   => $validation->getError('user'),
                'errPass' => $validation->getError('pass'),
            ];

            session()->setFlashdata($sessError);
            return redirect()->to('/login');
        } else {
            $cekUserLogin = $this->user->where('username', $username)->first();
            if ($cekUserLogin == null) {
                $sessError = [
                    'errlogin'   => 'Username dan password harus diisi!!',
                ];

                session()->setFlashdata($sessError);
                return redirect()->to('/login');
            } else {
                $passwordUser = $cekUserLogin['password'];
                if ($password == $passwordUser) {
                    $akses = $cekUserLogin['akses'];
                    $id = $cekUserLogin['id_user'];

                    $simpan_session = [
                        'id_user'  => $id,
                        'username' => $cekUserLogin['username'],
                        'akses' => $akses
                    ];

                    session()->set($simpan_session);
                    return redirect()->to('/');
                } else {
                    $sessError = [
                        'errlogin'   => 'Username atau password salah!!',
                    ];

                    session()->setFlashdata($sessError);
                    return redirect()->to('/login');
                }
            }
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
