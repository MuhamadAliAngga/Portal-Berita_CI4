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
            'title' => 'Admin',
            'subtitle' => 'User',
            'data' => $this->user->findAll()
        ];
        return view('/user', $data);
    }

    public function delete($id)
    {
        $this->user->delete($id);
        session()->setFlashdata('berhasil', 'Data user berhasil dihapus!!');
        return redirect()->to('/user');
    }
}
