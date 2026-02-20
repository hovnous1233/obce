<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::index');
$routes->get("okres/(:num)/kolik-na-strance/(:num)", "Main::okres/$1/$2");
$routes->get("main_page/(:num)/kolik-na-strance/(:num)", "Main::kraj/$1/$2");