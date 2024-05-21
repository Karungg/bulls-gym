<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/register', 'RegisterController::index');

$routes->group('admin', static function ($routes) {
    $routes->get('', 'DashboardController::index');
    $routes->get('packages', 'PackageController::index');
    $routes->get('packages/create', 'PackageController::create');
    $routes->post('packages/create', 'PackageController::store');
    $routes->get('packages/(:num)/edit', 'PackageController::edit/$1');
    $routes->put('packages/(:num)/edit', 'PackageController::update');
    $routes->delete('packages/delete/(:num)', 'PackageController::destroy/$1');
});
