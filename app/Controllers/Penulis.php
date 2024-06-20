<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProfilModel;

class Penulis extends BaseController
{
    protected $penulis;

    public function __construct()
    {
        $this->penulis = new ProfilModel();
    }

    public function index()
    {
        $getProfil = session()->get('profil');
        $data = [
            'data' => $this->penulis->getPenulis(),
            'title' => 'Admin',
            'subtitle' => 'Penulis',
            'profil' => $getProfil
        ];
        return view('penulis_view', $data);
    }

    public function insert()
    {
        // Validasi input
        if (!$this->validate([
            'nama_penulis' => 'required|min_length[3]|max_length[255]',
            'biografi' => 'required',
            'foto' => 'uploaded[foto]|max_size[foto,1024]|is_image[foto]',
            'link_portofolio' => 'required'
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Ambil file foto
        $foto = $this->request->getFile('foto');

        // Generate nama file baru
        $namaFoto = $foto->getRandomName();

        // Pindahkan file foto ke folder public/image
        $foto->move(ROOTPATH . 'public/image', $namaFoto);

        $data = [
            'nama_penulis' => $this->request->getVar('nama_penulis'),
            'biografi' => $this->request->getVar('biografi'),
            'foto' => $namaFoto,
            'link_portofolio' => $this->request->getVar('link_portofolio')
        ];

        $this->penulis->insert($data);
        session()->setFlashdata('berhasil', 'Data penulis berhasil ditambah!!');
        return redirect()->to(site_url('/penulis'));
    }

    public function update($id)
    {
        // Validasi input
        if (!$this->validate([
            'nama_penulis' => 'required|min_length[3]|max_length[255]',
            'biografi' => 'required',
            'foto' => 'max_size[foto,1024]|is_image[foto]',
            'link_portofolio' => 'required'
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Ambil data penulis berdasarkan ID
        $penulis = $this->penulis->find($id);

        // Jika ada file foto baru diunggah
        if ($foto = $this->request->getFile('foto')) {
            // Hapus foto lama jika ada
            if (file_exists($penulis['foto'])) {
                unlink($penulis['foto']);
            }
            // Generate nama file baru
            $namaFoto = $foto->getRandomName();
            // Pindahkan file foto baru ke folder public/image
            $foto->move(ROOTPATH . 'public/image', $namaFoto);
            $fotoPath = $namaFoto;
        } else {
            // Jika tidak ada foto baru diunggah, gunakan foto yang sudah ada
            $fotoPath = $penulis['foto'];
        }

        $data = [
            'nama_penulis' => $this->request->getVar('nama_penulis'),
            'biografi' => $this->request->getVar('biografi'),
            'foto' => $fotoPath,
            'link_portofolio' => $this->request->getVar('link_portofolio')
        ];

        $this->penulis->update($id, $data);
        session()->setFlashdata('berhasil', 'Data penulis berhasil diubah!!');
        return redirect()->to('/penulis');
    }

    public function delete($id)
    {
        // Ambil data penulis berdasarkan ID
        $penulis = $this->penulis->find($id);
        // Hapus foto penulis dari folder public/image jika ada
        if (file_exists($penulis['foto'])) {
            unlink($penulis['foto']);
        }
        // Hapus data penulis dari database
        $this->penulis->delete($id);
        session()->setFlashdata('berhasil', 'Data penulis berhasil dihapus!!');
        return redirect()->to('/penulis');
    }
}
