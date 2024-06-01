<?php

namespace App\Controllers;

use App\Models\ArtikelModel;
use CodeIgniter\RESTful\ResourceController;

class Artikel extends ResourceController
{
    protected $modelName = 'App\Models\ArtikelModel';
    protected $format    = 'json';

    public function index()
    {
        $model = new ArtikelModel();
        $data['articles'] = $model->findAll();
        $data = [
            'title' => 'Admin',
            'subtitle' => 'Artikel'
        ];

        return view('artikel_view', $data);
    }

    public function show($id = null)
    {
        $data = $this->model->find($id);
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Artikel tidak ditemukan');
        }
    }

    public function create()
    {
        $input = $this->request->getPost();

        // Validasi input jika diperlukan
        $validation = \Config\Services::validation();
        $validation->setRules([
            'id_penulis' => 'required|integer',
            'judul' => 'required|max_length[255]',
            'isi' => 'required',
            'tanggal_dibuat' => 'required|valid_date[Y-m-d]',
        ]);

        if (!$validation->run($input)) {
            return $this->fail($validation->getErrors());
        }

        if ($this->model->createArtikel($input)) {
            return $this->respondCreated($input, 'Artikel berhasil dibuat');
        } else {
            return $this->fail('Gagal membuat artikel');
        }
    }

    public function update($id = null)
    {
        $input = $this->request->getRawInput();

        // Validasi input jika diperlukan
        $validation = \Config\Services::validation();
        $validation->setRules([
            'id_penulis' => 'required|integer',
            'judul' => 'required|max_length[255]',
            'isi' => 'required',
            'tanggal_dibuat' => 'required|valid_date[Y-m-d]',
        ]);

        if (!$validation->run($input)) {
            return $this->fail($validation->getErrors());
        }

        if ($this->model->updateArtikel($id, $input)) {
            return $this->respondUpdated($input, 'Artikel berhasil diperbarui');
        } else {
            return $this->fail('Gagal memperbarui artikel');
        }
    }

    public function delete($id = null)
    {
        if ($this->model->deleteArtikel($id)) {
            return $this->respondDeleted('Artikel berhasil dihapus');
        } else {
            return $this->failNotFound('Artikel tidak ditemukan');
        }
    }
}
