<?php

namespace App\Controllers;

class ProfilController extends BaseController
{
    public function index(): string
    {
        // Simulasi data user (bisa diganti dengan session atau database)
        $data = [
            'title' => 'Profil Pengguna',
            'user' => [
                'nama'  => 'Romi Andika',
                'email' => 'romi.andika@example.com',
                'role'  => 'Administrator',
            ]
        ];

        return view('profil', $data); // app/Views/profil.php
    }
}
