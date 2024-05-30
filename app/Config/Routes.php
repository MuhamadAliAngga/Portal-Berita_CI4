<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//Routes Controller
$routes->get('/artikel', 'ArtikelController::index');
$routes->get('/artikel/create', 'ArtikelController::create');
$routes->post('/artikel/store', 'ArtikelController::store');
$routes->get('/artikel/edit/(:segment)', 'ArtikelController::edit/$1');
$routes->post('/artikel/update/(:segment)', 'ArtikelController::update/$1');
$routes->get('/artikel/delete/(:segment)', 'ArtikelController::delete/$1');



//Routes Aurthentication
$routes->get('/login', 'Auth::index');
$routes->get('/login/logout', 'Auth::logout');
$routes->post('/login/proses', 'Auth::prosesLogin');

//routes dashboard
$routes->get('/', 'Home::index');


//routes artikel
$routes->get('/artikel', 'Artikel::index');

//routes penulis
$routes->get('/penulis', 'Penulis::index');

//routes user
$routes->get('/user', 'User::index');
