<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/login', 'LoginController::index');
$routes->post('/login/auth', 'LoginController::auth');
$routes->get('/logout', 'LoginController::logout');
$routes->get('/books', 'BookController::index');
$routes->get('/emp/(:num)', 'EmpController::loan/$1');
$routes->get('/devolver/(:num)', 'EmpController::returnBook/$1');
$routes->get('/register', 'LoginController::register');
$routes->post('/user/registrar', 'LoginController::registrar');
$routes->get('/', 'LoginController::index');
$routes->get('/mybooks', 'BookController::myBooks');
$routes->get('/admin/books', 'BookController::adminBooks');
$routes->get('/admin/books/create', 'BookController::createForm');
$routes->post('/admin/books/create', 'BookController::createBook');
$routes->get('/admin/books/edit/(:num)', 'BookController::updateForm/$1');
$routes->post('/admin/books/update', 'BookController::updateBook');
$routes->get('/admin/books/delete/(:num)', 'BookController::deleteBook/$1');

