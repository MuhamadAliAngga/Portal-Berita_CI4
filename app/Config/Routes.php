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

//routes penulis
$routes->get('/penulis', 'Penulis::index');

//routes user
$routes->get('/user', 'User::index');


