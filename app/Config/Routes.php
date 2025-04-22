<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/index', 'Home::index');
$routes->get('/katalog', 'Home::katalog');
$routes->get('/detail', 'Home::detail');
$routes->get('/kontak', 'Home::kontak');
$routes->get('/faq', 'Home::faq');
$routes->get('/about', 'Home::about');
$routes->get('/(:segment)', 'Home::detail/$1');
