<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('App\Controllers\Front\Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->group('/', ['namespace' => 'App\Controllers\Front'], function ($routes) {
	$routes->get('', 'Home::index', ['as' => 'home']);

	$routes->get('banco-de-recursos', 'Resource::index', ['as' => 'resources']);
	$routes->get('recurso/(:any)', 'Resource::getResource/$1', ['as' => 'resource']);

	$routes->get('banco-de-recursos/categorias', 'Taxonomyresource::index', ['as' => 'resources_categories']);
	$routes->get('banco-de-recursos/categoria/(:any)', 'Taxonomyresource::getTaxonomyResource/$1', ['as' => 'resources_category']);

	$routes->get('herramientas-para-docentes', 'Tool::teachers', ['as' => 'teacher_tools']);
	$routes->get('herramientas-para-estudiantes', 'Tool::students', ['as' => 'student_tools']);

	$routes->get('objetos-de-aprendizaje', 'Elearning::index', ['as' => 'objects']);
	$routes->get('objeto-de-aprendizaje/(:any)', 'Elearning::getObject/$1', ['as' => 'object']);

	$routes->get('objetos-de-aprendizaje/categorias', 'Taxonomyelearning::index', ['as' => 'objects_categories']);
	$routes->get('objetos-de-aprendizaje/categoria/(:any)', 'Taxonomyelearning::getTaxonomyObject/$1', ['as' => 'objects_category']);

	$routes->get('quienes-somos', 'About::index', ['as' => 'about']);

	$routes->get('tutoriales-para-docentes', 'Tutorial::teachers', ['as' => 'teacher_tutorials']);
	$routes->get('tutoriales-para-estudiantes', 'Tutorial::students', ['as' => 'student_tutorials']);
});

$routes->group('/register', ['namespace' => 'App\Controllers\Register'], function ($routes) {
	$routes->get('', 'Home::index', ['as' => 'admin_register']);
	$routes->post('store', 'Home::store', ['as' => 'admin_register_store']);
});

$routes->group('/backoffice', ['namespace' => 'App\Controllers\Admin'], function ($routes) {
	$routes->get('', 'Home::index', ['as' => 'admin_home']);
	$routes->get('dashboard', 'Home::dashboard', ['as' => 'admin_dash']);
});

$routes->group('/api/v1', ['namespace' => 'App\Controllers\API\V1'], function ($routes) {
	$routes->get('', 'Home::index');
});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
