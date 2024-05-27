<?php

namespace App\Controllers;

use App\Models\ArtikelModel;
use CodeIgniter\Controller;

class ArtikelController extends Controller
{
    public function index()
    {
        $model = new ArtikelModel();
        $data['artikels'] = $model->findAll();
        return view('artikel/index', $data);
    }

    public function create()
    {
        return view('artikel/create');
    }

    public function store()
    {
        $model = new ArtikelModel();
        $data = [
            'id_penulis' => $this->request->getPost('id_penulis'),
            'judul' => $this->request->getPost('judul'),
            'isi' => $this->request->getPost('isi'),
            'tanggal_dibuat' => $this->request->getPost('tanggal_dibuat')
        ];
        $model->insert($data);
        return redirect()->to('/artikel');
    }

    public function edit($id)
    {
        $model = new ArtikelModel();
        $data['artikel'] = $model->find($id);
        return view('artikel/edit', $data);
    }

    public function update($id)
    {
        $model = new ArtikelModel();
        $data = [
            'id_penulis' => $this->request->getPost('id_penulis'),
            'judul' => $this->request->getPost('judul'),
            'isi' => $this->request->getPost('isi'),
            'tanggal_dibuat' => $this->request->getPost('tanggal_dibuat')
        ];
        $model->update($id, $data);
        return redirect()->to('/artikel');
    }

    public function delete($id)
    {
        $model = new ArtikelModel();
        $model->delete($id);
        return redirect()->to('/artikel');
    }
}
