<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Admin',
            'subtitle' => 'Dashboard'
        ];
        return view('dashboard', $data);
    }
}
