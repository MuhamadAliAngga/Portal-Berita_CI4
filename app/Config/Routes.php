<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//Routes Aurthentication
$routes->get('/login', 'Auth::index');
$routes->post('/login/prosesLogin', 'Auth::prosesLogin');