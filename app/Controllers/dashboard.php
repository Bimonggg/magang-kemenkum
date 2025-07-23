<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends Controller
{
    // Halaman utama dashboard
    public function index()
    {
        return view('dashboard/index');
    }

    // Profil pengguna
    public function profil()
    {
        return view('dashboard/profil');
    }

    // Halaman layanan publik
    public function layanan()
    {
        return view('dashboard/layanan');
    }

    // Halaman berita/informasi
    public function berita()
    {
        return view('dashboard/berita');
    }

    // Statistik atau data visual
    public function statistik()
    {
        return view('dashboard/statistik');
    }

    // Galeri foto atau media
    public function galeri()
    {
        return view('dashboard/galeri');
    }

    // Pengaturan pengguna
    public function pengaturan()
    {
        return view('dashboard/pengaturan');
    }

    // Halaman kontak / dukungan
    public function kontak()
    {
        return view('dashboard/kontak');
    }

    // Logout user dan redirect ke login
    public function logout()
    {
        session()->destroy(); // hapus semua sesi
        return redirect()->to('/login');
    }
}
