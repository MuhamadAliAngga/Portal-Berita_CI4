<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfilModel extends Model
{
    protected $table            = 'profil';
    protected $primaryKey       = 'id_profil';
    protected $allowedFields    = ['id_user', 'nama_lengkap', 'biografi', 'foto_profil', 'link_portofolio'];
    
    public function getProfilId($userId)
    {
        return $this->where('id_user', $userId)->first();
    }
    
    public function getPenulis()
    {
        return $this->join('user', 'profil.id_user = user.id_user')
            ->where('akses', 2)
            ->get()
            ->getResult();
    }
}

