<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteC
 * ollection $routes
 */
$routes->get('/', 'HomeControl::index');
$routes->get('/produk', 'HomeControl::produk');
