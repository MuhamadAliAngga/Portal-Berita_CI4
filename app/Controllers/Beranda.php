<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ArtikelModel;
use App\Models\VisitorModel;
class Beranda extends BaseController

{
    protected $artikel;
    protected $visitor;

    public function __construct()
    {
        $this->artikel = new ArtikelModel();
        $this->visitor = new VisitorModel();
    }
    public function index(): string
    {
        $data = [
            'artikel_all' => $this->artikel->getAllArtikels(),
            'title' => 'Beranda',
            'subtitle' => 'Beranda'
        ];
        return view('beranda', $data);
    }
    public function read($id)
    {
        $getProfil = session()->get('profil');
        $data = [
            'artikel' => $this->artikel->readArtikel()->find($id),
            'title' => 'Admin',
            'subtitle' => 'Artikel',
            'profil' => $getProfil
        ];
        if ($data['artikel']) {
            $ip_address = $this->request->getIPAddress();

            $this->visitor->incrementViewCount($id, $ip_address);

            $viewData = $this->visitor->getViewCount($id);
            $data['view_count'] = $viewData['unique_views'] ?? 0;

            return view('Artikel_Detail', $data);
        } else {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Article not found');
        }
    }
}
