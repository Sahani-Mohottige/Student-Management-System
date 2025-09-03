<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/Student', 'Student::index');
$routes->get('/Student/create', 'Student::create');
$routes->post('/Student/store', 'Student::store');
$routes->get('/Student/edit/(:num)', 'Student::edit/$1');
$routes->post('/Student/update/(:num)', 'Student::update/$1');

$routes->get('/Student/delete/(:num)', 'Student::delete/$1');

$routes->get('/', 'Home::index');
