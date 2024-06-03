<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $getProfil = session()->get('profil');
        $data = [
            'title' => 'Admin',
            'subtitle' => 'Dashboard',
            'profil' => $getProfil
        ];
        return view('dashboard', $data);
    }
}
