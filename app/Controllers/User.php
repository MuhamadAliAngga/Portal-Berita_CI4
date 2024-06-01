<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class User extends BaseController
{
    protected $user;

    public function __construct()
    {
        $this->user = new UserModel();
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
        // Validasi input
        

        $data = [
            'username' => $this->request->getVar('username'),
            'password' => md5($this->request->getVar('password')),
            'akses' => $this->request->getVar('akses'),
        ];

        $this->user->insert($data);
        session()->setFlashdata('berhasil', 'Data user berhasil ditambah!!');
        return redirect()->to(site_url('/user'));
    }

    public function update($id)
    {
        // Validasi input
        if (!$this->validate([
            'username' => 'required|min_length[3]|max_length[50]',
            'akses' => 'required|in_list[1,2]' // Assuming '1' for Admin and '2' for Penulis
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'username' => $this->request->getPost('username'),
            'akses' => $this->request->getPost('akses')
        ];

        $this->user->update($id, $data);
        session()->setFlashdata('berhasil', 'Data user berhasil diubah!!');
        return redirect()->to('/user');
    }

    public function delete($id)
    {
        $this->user->delete($id);
        session()->setFlashdata('berhasil', 'Data user berhasil dihapus!!');
        return redirect()->to('/user');
    }
}
