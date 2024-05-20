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
});
