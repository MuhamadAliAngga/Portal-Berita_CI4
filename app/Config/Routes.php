<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//Routes Aurthentication
$routes->get('/login', 'Auth::index');
$routes->get('/login/logout', 'Auth::logout');
$routes->post('/login/proses', 'Auth::prosesLogin');

//routes dashboard
$routes->get('/', 'Home::index');


//routes artikel
$routes->get('artikel', 'Artikel::index');
$routes->get('artikel/(:segment)', 'Artikel::show/$1');
$routes->post('artikel', 'Artikel::create');
$routes->put('artikel/(:segment)', 'Artikel::update/$1');
$routes->delete('artikel/(:segment)', 'Artikel::delete/$1');



//routes penulis
$routes->get('penulis', 'Penulis::index');
$routes->get('penulis/(:segment)', 'Penulis::show/$1');
$routes->post('penulis', 'Penulis::create');
$routes->put('penulis/(:segment)', 'Penulis::update/$1');
$routes->delete('penulis/(:segment)', 'Penulis::delete/$1');



//routes user
$routes->get('/user', 'User::index');
