<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Diagnosis::index');
$routes->get('/diagnosis', 'Diagnosis::index');
$routes->post('/diagnosis/result', 'Diagnosis::result');
$routes->get('/expert', 'Expert::index');