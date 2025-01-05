<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/Profile', 'Home::Profile');
$routes->post('/Profile', 'Home::UpdateProfile');
$routes->get('/user/tambah', 'Home::TambahUser');
$routes->post('/user/tambah', 'Home::PostUser');
$routes->get('/user/update/(:num)', "Home::EditUser/$1");
$routes->post('/user/update', 'Home::UpdateUser');
$routes->get('/user/delete/(:num)', 'Home::DeleteUser/$1');

$routes->get('/Auth/Login', 'AuthController::Index');
$routes->get('/Auth/Register', 'AuthController::Register');
$routes->get('/Auth/Logout', 'AuthController::Logout');
$routes->post('/Auth/Register', 'AuthController::PostRegister');
$routes->post('/Auth/Login', 'AuthController::PostLogin');
