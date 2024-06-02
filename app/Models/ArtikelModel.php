<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $table = 'artikel';
    protected $primaryKey = 'id_artikel';
    protected $allowedFields = ['id_profil', 'judul', 'thumbnail', 'ringkasan' ,'isi', 'tanggal_dibuat'];

    public function getArtikels()
    {
        $builder = $this->db->table('artikel'); 
        $builder->join('profil', 'artikel.id_profil = profil.id_profil');
        $query = $builder->get();

        return $query->getResult();
    }
}
