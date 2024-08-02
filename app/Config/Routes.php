<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'PostController::index');
$routes->get('/post', 'PostController::index');
$routes->get('/post/create', 'PostController::create');
$routes->post('/post/store', 'PostController::store');
$routes->get('/post/edit/(:num)', 'PostController::edit/$1');
$routes->post('/post/update/(:num)', 'PostController::update/$1');
$routes->get('/post/delete/(:num)', 'PostController::delete/$1');

$routes->get('/account', 'AccountController::index');
$routes->get('/account/create', 'AccountController::create');
$routes->post('/account/store', 'AccountController::store');
$routes->get('/account/edit/(:any)', 'AccountController::edit/$1');
$routes->post('/account/update/(:any)', 'AccountController::update/$1');
$routes->get('/account/delete/(:any)', 'AccountController::delete/$1');
$routes->get('/auth/login/(:any)', 'AccountController::login/$1');

