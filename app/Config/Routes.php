<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->match(['get', 'post'], '/', 'Home::index', ['as' => 'home']);
$routes->get('auth/logout', 'Logout::index');
$routes->match(['get', 'post'], '/settings', 'InstructorSettings::index', ['as' => 'instructorsettings']);
$routes->group('course', static function ($routes) {
    $routes->match(['get', 'post'], 'create', 'Course::createCourse', ['as' => 'createcourse']);
    $routes->match(['get', 'post'], 'addvideo/(:num)', 'Course::addVideoToCourse/$1', ['as' => 'addvideotocourse']);
    $routes->match(['get', 'post'], '(:num)', 'Course::courseDetails/$1', ['as' => 'coursedetails']);
    $routes->match(['get'], 'watch/(:num)', 'Course::watchCourse/$1', ['as' => 'watchcourse']);
    $routes->match(['get'], 'getVideoUrl/(:num)', 'Course::getVideoUrl/$1');

});
$routes->match(['get'], 'courses', 'Course::courses/$1', ['as' => 'courses']);
