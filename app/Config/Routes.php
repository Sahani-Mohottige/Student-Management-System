<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/student', 'student::index');
$routes->get('/student/create', 'student::create');
$routes->post('/student/store', 'student::store');
$routes->get('/student/edit/(:num)', 'student::edit/$1');
$routes->post('/student/update/(:num)', 'student::update/$1');

$routes->get('/student/delete/(:num)', 'student::delete/$1');

$routes->get('/', 'Home::index');
