<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// $routes->get('/register', 'RegisterController::index');
// $routes->post('/register', 'RegisterController::register');

$routes->group('admin', static function ($routes) {
    $routes->get('', 'DashboardController::index');
    // Route packages
    $routes->get('packages', 'PackageController::index');
    $routes->get('packages/create', 'PackageController::create');
    $routes->post('packages/create', 'PackageController::store');
    $routes->get('packages/(:num)/edit', 'PackageController::edit/$1');
    $routes->put('packages/(:num)/edit', 'PackageController::update');
    $routes->delete('packages/delete/(:num)', 'PackageController::destroy/$1');
    // Route memberships
    $routes->get('memberships', 'MembershipController::index');
    $routes->get('memberships/(:num)/edit', 'MembershipController::edit/$1');
    $routes->put('memberships/(:num)/edit', 'MembershipController::update');
    $routes->delete('memberships/delete/(:num)', 'MembershipController::destroy/$1');
});
