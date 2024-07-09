<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/login', 'LoginController::index');
$routes->post('/login/auth', 'LoginController::auth');
$routes->get('/logout', 'LoginController::logout');
$routes->get('/books', 'BookController::index');
$routes->get('/loan/(:num)', 'EmpController::emp/$1');
$routes->get('/return/(:num)', 'EmpController::returnBook/$1');
$routes->get('/register', 'LoginController::register');
$routes->post('/user/registrar', 'LoginController::registrar');
$routes->get('/', 'LoginController::index');
