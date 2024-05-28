<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::beranda');
$routes->get('/about', 'Home::about');
$routes->get('/contact', 'Home::contact');