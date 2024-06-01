<?php

namespace App\Controllers;

use App\Models\ProfilModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Profil extends BaseController
{
    protected $profil;

    public function __construct()
    {
        $this->profil = new ProfilModel;
    }
    
    public function index()
    {
        $sess = session()->get('id_user');
        $data = [
            'title' => 'Admin',
            'subtitle' => 'Profil',
            'profil' => $this->profil->getUser()
        ];
        return view('profil', $data);
    }
}
