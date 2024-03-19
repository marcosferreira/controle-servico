<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['as' => 'home.index']);
$routes->post('/', 'Home::store', ['as' => 'home.store']);

service('auth')->routes($routes);
