<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/beranda', 'Beranda::index');
// $routes->get('/produk', 'Layanan::produk');
$routes->get('/layanan', 'Layanan::index');
$routes->get('/layanan/(:segment)', 'Layanan::detail/$1');
$routes->get('/portofolio', 'Portofolio::index');
