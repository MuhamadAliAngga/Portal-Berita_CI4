<?php

namespace App\Models;

use CodeIgniter\Model;

class PenulisModel extends Model
{
    protected $table = 'penulis';
    protected $primaryKey = 'id_penulis';

    protected $useAutoIncrement = true;

    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nama_penulis', 'biografi', 'foto', 'link_portofolio'];

    protected $useTimestamps = false;

    // Metode untuk membuat data penulis baru
    public function createPenulis($data)
    {
        return $this->insert($data);
    }

    // Metode untuk memperbarui data penulis
    public function updatePenulis($id, $data)
    {
        return $this->update($id, $data);
    }

    // Metode untuk menghapus data penulis
    public function deletePenulis($id)
    {
        return $this->delete($id);
    }
}
