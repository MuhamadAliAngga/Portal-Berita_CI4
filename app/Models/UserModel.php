<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'user';
    protected $primaryKey       = 'id_user';
    protected $allowedFields    = ['username', 'password', 'akses'];
    public function getProfil()
    {
        $builder = $this->db->table('user');
        $builder->join('profil', 'user.id_user = profil.id_user');
        $query = $builder->getWhere(['profil.id_user' => session()->get('id_user')]);

        return $query->getResult();
    }
}
