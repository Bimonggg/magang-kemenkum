<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Layanan extends Controller
{
    public function index(): string
    {
        return view('layanan');
    }
}
