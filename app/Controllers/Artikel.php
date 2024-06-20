<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ArtikelModel;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\VisitorModel;

class Artikel extends BaseController
{
    protected $artikel;
    protected $visitor;

    public function __construct()
    {
        $this->artikel = new ArtikelModel();
        $this->visitor = new VisitorModel();
    }

    public function index()
    {
        $getProfil = session()->get('profil');
        $data = [
            'artikel' => $this->artikel->getArtikels(),
            'artikel_all' => $this->artikel->getAllArtikels(),
            'title' => 'Admin',
            'subtitle' => 'Artikel',
            'profil' => $getProfil
        ];
        //var_dump($data);die;
        return view('artikel_view', $data);
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
            $data['view_count'] = $viewData;

            return view('artikel_read', $data);
        } else {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Article not found');
        }
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

    function uploadGambar()
    {
        if ($this->request->getFile('file')) {
            $dataFile = $this->request->getFile('file');
            $fileName = $dataFile->getRandomName();
            $dataFile->move("uploads/berkas/", $fileName);
            echo base_url("uploads/berkas/$fileName");
        }
    }

    function deleteGambar()
    {
        $src = $this->request->getVar('src');
        //--> uploads/berkas/1630368882_e4a62568c1b50887a8a5.png

        //https://localhost/ci4summernote/public
        if ($src) {
            $file_name = str_replace(base_url() . "/", "", $src);
            if (unlink($file_name)) {
                echo "Delete file berhasil";
            }
        }
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
}
