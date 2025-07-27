<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/template-surat', 'PpdbController::downloadSuratPernyataan');

$routes->group('', ['filter' => 'is_guest'], static function($routes){
    $routes->get('/daftar', 'PpdbController::index');
    $routes->post('/daftar', 'PpdbController::create');

    $routes->get('/login', 'AuthController::loginPpdb');
    $routes->post('/login', 'AuthController::storeLoginPpdb');

    $routes->get('/admin/login', 'AuthController::loginAdmin');
    $routes->post('/admin/login', 'AuthController::storeLoginAdmin');
});

$routes->group('', ['filter' => 'is_ppdb'], static function($routes) {
    $routes->get('/ppdb-dashboard', 'DashboardController::ppdb');

    $routes->get('/formulir', 'PpdbController::formulir');
    $routes->post('/formulir', 'PpdbController::storeFormulir');

    $routes->get('/change-password', 'PpdbController::changePassword');
    $routes->post('/change-password', 'PpdbController::storeChangePassword');

    $routes->get('/cetak-formulir', 'PpdbController::cetakFormulir');

    $routes->get('/pengumuman-ppdb', 'PengumumanController::ppdb');
});

$routes->group('', ['filter' => 'is_admin'], static function($routes){
    $routes->get('/admin-dashboard', 'DashboardController::admin');

    $routes->get('/manajemen-ppdb', 'ManajemenPpdbController::index');
    $routes->post('/manajemen-ppdb/(:num)', 'ManajemenPpdbController::update/$1');
    $routes->post('/manajemen-ppdb/(:num)/change-password', 'ManajemenPpdbController::changePassword/$1');
    $routes->get('/manajemen-ppdb/delete/(:num)', 'ManajemenPpdbController::delete/$1');
    $routes->get('/manajemen-ppdb/report', 'ManajemenPpdbController::report');

    $routes->get('/pengumuman', 'PengumumanController::index');
    $routes->post('/pengumuman', 'PengumumanController::store');
    $routes->post('/pengumuman/update/(:num)', 'PengumumanController::update/$1');
    $routes->get('/pengumuman/delete/(:num)', 'PengumumanController::delete/$1');
});

$routes->get('/logout', 'AuthController::logout');