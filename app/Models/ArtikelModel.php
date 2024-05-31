<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $table = 'artikel';
    protected $primaryKey = 'id_artikel';

    protected $useAutoIncrement = true;

    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_penulis', 'judul', 'isi', 'tanggal_dibuat'];

    protected $useTimestamps = false;

    // Metode untuk membuat artikel baru
    public function createArtikel($data)
    {
        return $this->insert($data);
    }

    // Metode untuk memperbarui artikel yang ada
    public function updateArtikel($id, $data)
    {
        return $this->update($id, $data);
    }

    // Metode untuk menghapus artikel
    public function deleteArtikel($id)
    {
        return $this->delete($id);
    }
}
