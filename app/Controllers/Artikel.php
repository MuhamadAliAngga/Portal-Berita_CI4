<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ArtikelModel;
use CodeIgniter\HTTP\ResponseInterface;

class Artikel extends BaseController
{
    protected $artikel;

    public function __construct()
    {
        $this->artikel = new ArtikelModel();
    }

    public function index()
    {
        $getProfil = session()->get('profil');
        $data = [
            'artikel' => $this->artikel->getArtikels(),
            'title' => 'Admin',
            'subtitle' => 'Artikel',
            'profil' => $getProfil
        ];
        //var_dump($data);die;
        return view('artikel_view', $data);
    }
    public function tambah()
    {
        $getProfil = session()->get('profil');
        $data = [
            'title' => 'Admin',
            'subtitle' => 'Artikel </a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Tambah Artikel</a></li>',
            'profil' => $getProfil
        ];

        return view('artikel_add', $data);
    }

    public function insert()
    {
        $thumbnail = $this->request->getFile('thumbnail');
        $filename = $thumbnail->getRandomName();
        $thumbnail->move(ROOTPATH . 'public/image/thumbnail/', $filename);
        $currentDate = (new \DateTime())->format('Y-m-d');
        $data = [
            'id_profil' => $this->request->getPost('id_profil'),
            'judul' => $this->request->getPost('judul'),
            'thumbnail' => $filename,
            'ringkasan' => $this->request->getPost('ringkasan'),
            'isi' => $this->request->getPost('isi'),
            'tanggal_dibuat' => $currentDate
        ];
        $this->artikel->insert($data);
        
        session()->setFlashdata('berhasil', 'Data artikel berhasil ditambah!!');
        return redirect()->to(site_url('/artikel'));
    }

    public function update($id)
    {
        // Validasi input
        if (!$this->validate([
            'judul' => 'required|min_length[3]|max_length[255]',
            'isi' => 'required',
            'id_penulis' => 'required|integer',
            'tanggal_dibuat' => 'required|valid_date[Y-m-d]'
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'judul' => $this->request->getPost('judul'),
            'isi' => $this->request->getPost('isi'),
            'id_penulis' => $this->request->getPost('id_penulis'),
            'tanggal_dibuat' => $this->request->getPost('tanggal_dibuat')
        ];

        $this->artikel->update($id, $data);
        session()->setFlashdata('berhasil', 'Data artikel berhasil diubah!!');
        return redirect()->to('/artikel');
    }

    public function uploadGambar()
    {
        if ($this->request->getFile('file')) {
            $dataFile = $this->request->getFile('file');
            $filename = $dataFile->getRandomName();
            $dataFile->move('image/thumbnail/', $filename);
            echo base_url('image/thumbnail/$filename');
        }
    }

    public function delete($id)
    {
        $this->artikel->delete($id);
        session()->setFlashdata('berhasil', 'Data artikel berhasil dihapus!!');
        return redirect()->to('/artikel');
    }

    public function detail($id)
    {
        $artikel = $this->artikel->find($id);
        if (!$artikel) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Artikel dengan ID ' . $id . ' tidak ditemukan.');
        }

        $data = [
            'artikel' => $artikel,
            'title' => 'Detail Artikel',
            'subtitle' => 'Detail Artikel'
        ];

        return view('artikel_detail_view', $data);
    }
}
