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
        $data = [
            'title' => 'Admin',
            'subtitle' => 'Dashboard',
            'profil' => $getProfil, 
            'totalArtikel' => $this->artikel->get()->getNumRows(),
            'totalProfil' => $this->artikel->get()->getNumRows()
        ];

        $totalViewsData = $this->visitor->getTotalViews();
        $data['totalViews'] = $totalViewsData['total_unique_views'] ?? 0;

        $totalViewsTodayData = $this->visitor->getTotalViewsToday();
        $data['totalViewsToday'] = $totalViewsTodayData['total_unique_views_today'] ?? 0;

        return view('dashboard', $data);
    }
}
