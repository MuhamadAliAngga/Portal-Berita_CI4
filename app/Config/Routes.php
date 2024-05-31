<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//Routes Aurthentication
$routes->get('/login', 'Auth::index');
$routes->post('/login/prosesLogin', 'Auth::prosesLogin');

//routes dashboard
$routes->get('/', 'Home::index');


//routes artikel
$routes->get('/artikel', 'Artikel::index');
$routes->post('/artikel/insert', 'Artikel::insert');
$routes->post('/artikel/update/(:num)', 'Artikel::update/$1');
$routes->get('/artikel/delete/(:num)', 'Artikel::delete/$1');



//routes penulis
$routes->get('/penulis', 'Penulis::index');
$routes->post('/penulis/insert', 'Penulis::insert');
$routes->post('/penulis/update/(:num)', 'Penulis::update/$1');
$routes->get('/penulis/delete/(:num)', 'Penulis::delete/$1');



//routes user
$routes->get('/user', 'User::index');
$routes->post('/user/insert', 'User::insert');
$routes->post('/user/update/(:num)', 'User::update/$1');
$routes->get('/user/delete/(:num)', 'User::delete/$1');
