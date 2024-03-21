<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['as' => 'home.index']);
$routes->post('/', 'Home::store', ['as' => 'home.store']);
$routes->post('/categoria-servico', 'ServiceCategory::index', ['as' => 'service-category.index']);
$routes->post('/tipo-servico', 'ServiceType::index', ['as' => 'service-type.index']);
$routes->post('/setor', 'Sector::index', ['as' => 'sector.index']);
$routes->post('/requerente', 'Claimant::index', ['as' => 'claimant.index']);
$routes->post('/servico', 'Service::index', ['as' => 'service.index']);

service('auth')->routes($routes);
