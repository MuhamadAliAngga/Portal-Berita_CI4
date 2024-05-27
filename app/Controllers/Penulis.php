<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Penulis extends BaseController
{
    public function index()
    {
        return view('penulis');

    }
}
