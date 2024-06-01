<?php

namespace App\Controllers;

use App\Models\PenulisModel;
use CodeIgniter\RESTful\ResourceController;

class Penulis extends ResourceController
{
    protected $modelName = 'App\Models\PenulisModel';
    protected $format    = 'json';

    public function index()
    {
        $model = new PenulisModel();
        $data['writers'] = $model->findAll();
        $data = [
            'title' => 'Admin',
            'subtitle' => 'Penulis'
        ];

        return view('penulis_view', $data);
    }

    public function show($id = null)
    {
        $data = $this->model->find($id);
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Penulis tidak ditemukan');
        }
    }

    public function create()
    {
        $input = $this->request->getPost();
        $file = $this->request->getFile('foto');

        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(ROOTPATH . 'app/libraries/poto', $newName);
            $input['foto'] = $newName;
        } else {
            return $this->fail('Gagal mengunggah foto');
        }

        // Validasi input jika diperlukan
        $validation = \Config\Services::validation();
        $validation->setRules([
            'nama_penulis' => 'required|max_length[255]',
            'biografi' => 'required',
            'foto' => 'required',
            'link_portofolio' => 'required|valid_url',
        ]);

        if (!$validation->run($input)) {
            return $this->fail($validation->getErrors());
        }

        $id = $this->model->insert($input);
        if ($id) {
            $newWriter = $this->model->find($id);
            return $this->respondCreated($newWriter, 'Penulis berhasil ditambahkan');
        } else {
            return $this->fail('Gagal menambahkan penulis');
        }
    }

    public function update($id = null)
    {
        $input = $this->request->getRawInput();
        $file = $this->request->getFile('foto');

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(ROOTPATH . 'app/libraries/poto', $newName);
            $input['foto'] = $newName;
        }

        // Validasi input jika diperlukan
        $validation = \Config\Services::validation();
        $validation->setRules([
            'nama_penulis' => 'required|max_length[255]',
            'biografi' => 'required',
            'link_portofolio' => 'required|valid_url',
        ]);

        if (!$validation->run($input)) {
            return $this->fail($validation->getErrors());
        }

        if ($this->model->update($id, $input)) {
            $updatedWriter = $this->model->find($id);
            return $this->respondUpdated($updatedWriter, 'Penulis berhasil diperbarui');
        } else {
            return $this->fail('Gagal memperbarui penulis');
        }
    }

    public function delete($id = null)
    {
        if ($this->model->delete($id)) {
            return $this->respondDeleted('Penulis berhasil dihapus');
        } else {
            return $this->failNotFound('Penulis tidak ditemukan');
        }
    }
}
