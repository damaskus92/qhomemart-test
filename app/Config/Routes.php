<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('api/movies', 'MovieController::index');
$routes->post('api/rectangle', 'RectangleController::index');
