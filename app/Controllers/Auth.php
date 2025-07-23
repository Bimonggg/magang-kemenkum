<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Auth extends Controller
{
    public function index()
    {
        return redirect()->to('/login');
    }

    public function login()
    {
        return view('auth/login');
    }

    public function register()
    {
        return view('auth/register');
    }

    public function doLogin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Dummy login (pakai username admin dan password admin123)
        if ($username === 'admin' && $password === 'admin123') {
            session()->set('logged_in', true);
            session()->set('username', $username);
            return redirect()->to('/dashboard');
        } else {
            return redirect()->back()->with('error', 'Login gagal. Coba lagi.');
        }
    }

    public function doRegister()
    {
        // Proses register hanya simulasi
        return redirect()->to('/login')->with('success', 'Registrasi berhasil. Silakan login.');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
