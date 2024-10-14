<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/contact', 'Home::contact');

$routes->get('/record', 'Record::index');
$routes->post('/record/check_record', 'Record::check_record');

$routes->get('/cases', 'Cases::index');
$routes->get('/cases/(:num)', 'Cases::view_case/$1');

$routes->get('/login', 'Login::index');
$routes->post('/login/check_login', 'Login::check_login');
$routes->get('/login/logout','Login::logout');


