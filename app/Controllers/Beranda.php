<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Beranda extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Beranda',
            'subtitle' => 'Beranda'
        ];
        return view('beranda', $data);
    }
}
