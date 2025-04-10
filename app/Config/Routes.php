<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('register', 'Home::register');
$routes->get('logout', 'Home::logout');
$routes->post('loginAction', 'Home::loginAction');
$routes->post('registerAction', 'Home::registerAction');

//routes admin
$routes->get('/admin', 'Admin::index');
$routes->get('/admin/tambah', 'Admin::tambah');
$routes->post('admin-create', 'Admin::add');
$routes->get('/admin/edit/(:num)', 'Admin::form_ubah/$1');
$routes->put('/admin/edit/(:num)', 'Admin::edit/$1');
$routes->get('/admin/delete/(:num)', 'Admin::delete/$1');

//routes admin
$routes->get('user', 'User::index');
$routes->get('user/form', 'User::form');
$routes->get('user/tambah', 'User::tambah');
$routes->post('user-create', 'User::add');
$routes->get('user/edit/(:num)', 'User::form_ubah/$1');
$routes->put('user/edit/(:num)', 'User::edit/$1');
$routes->get('user/delete/(:num)', 'User::delete/$1');

$routes->get('/home', 'Utama::index');