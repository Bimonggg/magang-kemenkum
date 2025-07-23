<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('dashboard'); // View utama dashboard
    }

    public function profil(): string
    {
        return view('pages/profil'); // View halaman profil
    }

    public function layanan(): string
    {
        return view('pages/layanan'); // View halaman layanan
    }

    public function berita(): string
    {
        return view('pages/berita'); // View halaman berita
    }

    public function statistik(): string
    {
        return view('pages/statistik'); // View halaman statistik
    }
}
