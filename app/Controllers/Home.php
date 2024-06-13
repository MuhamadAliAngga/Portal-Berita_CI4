<?php

namespace App\Controllers;
use App\Models\VisitorModel;

class Home extends BaseController
{
    protected $visitor;

    public function __construct()
    {
        $this->visitor = new VisitorModel();
    }
    public function index(): string
    {
        $getProfil = session()->get('profil');
        $data = [
            'title' => 'Admin',
            'subtitle' => 'Dashboard',
            'profil' => $getProfil
        ];

        $totalViewsData = $this->visitor->getTotalViews();
        $data['totalViews'] = $totalViewsData['total_unique_views'] ?? 0;

        $totalViewsTodayData = $this->visitor->getTotalViewsToday();
        $data['totalViewsToday'] = $totalViewsTodayData['total_unique_views_today'] ?? 0;

        return view('dashboard', $data);
    }
}
