<?php

namespace App\Controllers;
use App\Models\ProfilModel;
use App\Models\ArtikelModel;
use App\Models\VisitorModel;
use App\Controllers\BaseController;

class Home extends BaseController
{
    protected $visitor;
    protected $artikel;
    protected $profil;

    public function __construct()
    {
        $this->artikel = new ArtikelModel();
        $this->profil = new ProfilModel();
        $this->visitor = new VisitorModel();
    }

    public function index(): string
    {
        $getProfil = session()->get('profil');
        $totalViewsData = $this->visitor->getTotalViews();
        $totalViewsTodayData = $this->visitor->getTotalViewsToday();

        $data = [
            'title' => 'Admin',
            'subtitle' => 'Dashboard',
            'profil' => $getProfil, 
            'totalArtikel' => $this->artikel->get()->getNumRows(),
            'totalProfil' => $this->artikel->get()->getNumRows(),
            'totalViews' => $totalViewsData,
            'totalViewsToday' => $totalViewsTodayData
        ];
        
        return view('dashboard', $data);
    }
}
