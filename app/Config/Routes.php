<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(true);
$routes->get('/', 'Home::index');
$routes->get('/auth/register', 'Auth::register');
$routes->get('/auth/login', 'Auth::login');
$routes->resource('plant');
