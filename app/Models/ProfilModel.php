<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfilModel extends Model
{
    protected $table            = 'profil';
    protected $primaryKey       = 'id_profil';
    protected $allowedFields    = ['id_user', 'nama_lengkap', 'biografi', 'foto_profil', 'link_portofolio'];

    public function getUser()
    {
        $builder = $this->db->table('profil');
        $builder->join('user', 'profil.id_user = user.id_user');
        $query = $builder->getWhere(['profil.id_user' => session()->get('id_user')]);

        return $query->getResult();
    }
}
