<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $table = 'artikel';
    protected $primaryKey = 'id_artikel';
    protected $allowedFields = ['id_penulis', 'judul', 'isi', 'tanggal_dibuat'];

    // Optional: Define validation rules directly in the model
    protected $validationRules = [
        'judul' => 'required|min_length[3]|max_length[255]',
        'isi' => 'required',
        'id_penulis' => 'required|integer',
        'tanggal_dibuat' => 'required|valid_date[Y-m-d]'
    ];
}
