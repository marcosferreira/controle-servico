<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['as' => 'home.index']);
$routes->post('/', 'Home::store', ['as' => 'home.store']);
$routes->get('/categoria-servico', 'ServiceCategory::index', ['as' => 'serviceCategory.index']);
$routes->get('/tipo-servico', 'ServiceType::index', ['as' => 'serviceType.index']);
$routes->get('/setor', 'Sector::index', ['as' => 'sector.index']);
$routes->get('/requerente', 'Claimant::index', ['as' => 'claimant.index']);
$routes->get('/servico', 'Service::index', ['as' => 'service.index']);

service('auth')->routes($routes);
