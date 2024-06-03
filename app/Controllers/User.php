<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ProfilModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class User extends BaseController
{
    protected $user;
    protected $profil;

    public function __construct()
    {
        $this->user = new UserModel();
        $this->profil = new ProfilModel();
    }

    public function index()
    {
        $getProfil = session()->get('profil');
        $data = [
            'data' => $this->user->findAll(),
            'title' => 'Admin',
            'subtitle' => 'User',
            'profil' => $getProfil
        ];
        return view('user', $data);
    }

    public function insert()
    {
        $dataUser = [
            'username' => $this->request->getVar('username'),
            'password' => md5($this->request->getVar('password')),
            'akses' => $this->request->getVar('akses'),
        ];
        $user = $this->user->insert($dataUser);

        $foto = $this->request->getFile('foto_profil');
        $filename = $foto->getRandomName();
        $foto->move(ROOTPATH . 'public/image/profil/', $filename);
        $dataProfil = [
            'id_user' => $user,
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'biografi' => $this->request->getVar('biografi'),
            'foto_profil' => $filename,
            'link_portofolio' => $this->request->getVar('link_portofolio')
        ];
        $this->profil->insert($dataProfil);

        
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
