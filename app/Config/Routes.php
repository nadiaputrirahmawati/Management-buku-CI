<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'DashboardContollers::index');
$routes->get('/buku/data', 'BooksControllers::index');
$routes->post('buku/tambah', 'BooksControllers::tambahData');
$routes->delete('buku/(:num)', 'BooksControllers::deleteData/$1');
$routes->get('/buku/detail/(:num)', 'BooksControllers::detailData/$1');
$routes->post('/buku/update/(:num)', 'BooksControllers::updateData/$1');
$routes->get('/buku/all', 'DataController::index');
$routes->get('/buku/all/detail/(:num)', 'DataController::detail/$1');
