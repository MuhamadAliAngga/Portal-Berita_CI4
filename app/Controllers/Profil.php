<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ProfilModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Profil extends BaseController
{
    protected $profil;
    protected $user;

    public function __construct()
    {
        $this->profil = new ProfilModel;
        $this->user = new UserModel;
    }
    
    public function index()
    {
        $getProfil = session()->get('profil');
        $data = [
            'title' => 'Admin',
            'subtitle' => 'Profil',
            'getprofil' => $this->user->getProfil(),
            'profil' => $getProfil
        ];
        // var_dump($data);die;
        return view('profil', $data);
    }
}
