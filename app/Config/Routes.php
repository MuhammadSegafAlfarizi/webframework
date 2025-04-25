<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
<<<<<<< HEAD
$routes->get('/index', 'Home::index');
=======
$routes->get('/index', 'Home::about');
>>>>>>> 2005f8c70943d5a308889e3dfb6d5896811a5ab6
$routes->get('/katalog', 'Home::katalog');
$routes->get('/detail', 'Home::detail');
$routes->get('/kontak', 'Home::kontak');
$routes->get('/faq', 'Home::faq');
$routes->get('/about', 'Home::about');
<<<<<<< HEAD
$routes->get('/(:segment)', 'Home::detail/$1');
=======
>>>>>>> 2005f8c70943d5a308889e3dfb6d5896811a5ab6
