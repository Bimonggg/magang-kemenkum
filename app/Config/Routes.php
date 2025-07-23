<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::index');
$routes->get('/login', 'Auth::login');
$routes->post('/do-login', 'Auth::doLogin');
$routes->get('/register', 'Auth::register');
$routes->post('/do-register', 'Auth::doRegister');
$routes->get('/dashboard', function() {
    return view('dashboard');
});
$routes->get('/logout', 'Auth::logout');
$routes->get('/dashboard/profil', 'ProfilController::index');
$routes->get('/layanan', 'Layanan::index');
$routes->get('/berita', 'Berita::index');
$routes->get('/statistik', 'Statistik::index');




