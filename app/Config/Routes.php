<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/namana', 'Namana::index');
$routes->get('/namana/(:segment)/posts/(:segment)', 'Home::post/$1/$2');
$routes->get('/namana/(:segment)', 'Namana::view/$1');
$routes->get('/hafatra', 'Hafatra::index');
$routes->get('/hafatra/hanoratra', 'Hafatra::compose');
$routes->get('/hafatra/hanoratra/(:segment)', 'Hafatra::compose/$1');
$routes->get('/hafatra/inbox/(:segment)', 'Hafatra::inbox/$1');
$routes->get('/hafatra/(:any)', 'Hafatra::index');
$routes->get('/vondrona', 'Vondrona::index');
$routes->get('/vondrona/(:segment)/members', 'Vondrona::members/$1');
$routes->get('/vondrona/(:segment)/admin', 'Vondrona::admin/$1');
$routes->get('/vondrona/(:segment)', 'Vondrona::view/$1');
$routes->get('/karajia', 'Karajia::index');
$routes->get('/karajia/(:any)', 'Karajia::index');
$routes->get('/album', 'Album::index');
$routes->get('/album/photo/(:segment)', 'Album::photo/$1');
$routes->get('/album/(:any)', 'Album::index');
$routes->get('/profile', 'Profile::index');
$routes->get('/notifications', 'Home::notifications');
