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
            'data' => $this->user->findAll(),
            'title' => 'Admin',
            'subtitle' => 'User'
        ];
        return view('user', $data);
    }

    public function insert()
    {
        $data = [
            'username' => $this->request->getVar('username'),
            'password' => md5($this->request->getVar('password')),
            'akses' => $this->request->getVar('akses'),
        ];

        $sess = [
            'berhasil' => 'Data user berhasil ditambah!!'
        ];

        $this->user->insert($data);
        session()->setFlashdata($sess);
        return redirect()->to(site_url('/user'));
    }

    public function update($id)
    {
        $data = [
            'username' => $this->request->getPost('username'),
            'akses' => $this->request->getPost('akses')
        ];

         $sess = [
            'berhasil' => 'Data user berhasil diubah!!'
        ];

        $this->user->update($id, $data);
        session()->setFlashdata($sess);
        return redirect()->to('/user');
    }

    public function delete($id)
    {
         $sess = [
            'berhasil' => 'Data user berhasil dihapus!!'
        ];
        $this->user->where('id_user', $id)->delete($id);
        session()->setFlashdata($sess);
        return redirect()->to('/user');
    }
}
