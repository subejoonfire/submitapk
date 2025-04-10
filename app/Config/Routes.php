<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Admin::index');
$routes->get('/admin/tambah', 'Admin::tambah');
$routes->post('admin-create', 'Admin::add');
$routes->get('/admin/edit/(:num)', 'Admin::form_ubah/$1');
$routes->put('/admin/edit/(:num)', 'Admin::edit/$1');
$routes->get('/admin/delete/(:num)', 'Admin::delete/$1');

$routes->get('/home', 'Utama::index');
