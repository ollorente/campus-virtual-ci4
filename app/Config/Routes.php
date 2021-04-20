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

	$routes->get('banco-de-recursos', 'Resource::index', ['as' => 'resources']); // TODO -> por hacer
	$routes->get('recurso/(:any)', 'Resource::getResource/$1', ['as' => 'resource']); // TODO -> por hacer

	$routes->get('banco-de-recursos/categorias', 'Taxonomyresource::index', ['as' => 'resources_categories']); // TODO -> por hacer
	$routes->get('banco-de-recursos/categoria/(:any)', 'Taxonomyresource::getTaxonomyResource/$1', ['as' => 'resources_category']); // TODO -> por hacer

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
	$routes->get('', 'Home::index', ['as' => 'admin_register']); // TODO -> poner alertas
	$routes->post('store', 'Home::store', ['as' => 'admin_register_store']);
});

$routes->group('/backoffice', ['namespace' => 'App\Controllers\Admin'], function ($routes) {
	$routes->get('', 'Home::index', ['as' => 'admin_home']); // TODO -> Que logueee
	$routes->post('check', 'Home::signin', ['as' => 'admin_signin']);
	$routes->get('logout', 'Home::signout', ['as' => 'admin_signout']);

	$routes->get('perfil', 'User::dashboard', ['as' => 'admin_profile']); // TODO -> por hacer
	$routes->get('perfil/editar', 'User::dashboard', ['as' => 'admin_edit_profile']); // TODO -> por hacer

	// Plataforma
	$routes->get('dashboard', 'Home::dashboard', ['as' => 'admin_dash']); // TODO -> por hacer

	$routes->get('cursos', 'Course::index', ['as' => 'admin_courses']); // TODO -> por hacer
	$routes->get('curso/nuevo', 'Course::new', ['as' => 'admin_new_course']); // TODO -> por hacer
	$routes->get('curso/(:any)', 'Course::edit/$1', ['as' => 'admin_course']); // TODO -> por hacer
	$routes->get('curso/(:any)/editar', 'Course::get/$1', ['as' => 'admin_edit_course']); // TODO -> por hacer

	$routes->get('diplomados', 'Graduate::index', ['as' => 'admin_graduates']); // TODO -> por hacer
	$routes->get('diplomado/nuevo', 'Graduate::new', ['as' => 'admin_new_graduate']); // TODO -> por hacer
	$routes->get('diplomado/(:any)', 'Graduate::edit/$1', ['as' => 'admin_graduate']); // TODO -> por hacer
	$routes->get('diplomado/(:any)/editar', 'Graduate::get/$1', ['as' => 'admin_edit_graduate']); // TODO -> por hacer

	$routes->get('herramientas', 'Tool::index', ['as' => 'admin_tools']);
	$routes->get('herramienta/nueva', 'Tool::new', ['as' => 'admin_new_tool']); // TODO -> Que cree
	$routes->get('herramienta/(:any)/editar', 'Tool::edit/$1', ['as' => 'admin_edit_tool']); // TODO -> Que edite
	$routes->get('herramienta/(:any)', 'Tool::get/$1', ['as' => 'admin_tool']);

	$routes->get('objetos', 'Elearning::index', ['as' => 'admin_objects']); // TODO -> por hacer
	$routes->get('objeto/nuevo', 'Elearning::new', ['as' => 'admin_new_object']); // TODO -> por hacer
	$routes->get('objeto/(:any)', 'Elearning::edit/$1', ['as' => 'admin_object']); // TODO -> por hacer
	$routes->get('objeto/(:any)/editar', 'Elearning::get/$1', ['as' => 'admin_edit_object']); // TODO -> por hacer

	$routes->get('programas', 'Program::index', ['as' => 'admin_programs']); // TODO -> por hacer
	$routes->get('programa/nuevo', 'Program::new', ['as' => 'admin_new_program']); // TODO -> por hacer
	$routes->get('programa/(:any)', 'Program::edit/$1', ['as' => 'admin_program']); // TODO -> por hacer
	$routes->get('programa/(:any)/editar', 'Program::get/$1', ['as' => 'admin_edit_program']); // TODO -> por hacer

	$routes->get('tutoriales', 'Tutorial::index', ['as' => 'admin_tutorials']); // TODO -> por hacer
	$routes->get('tutorial/nuevo', 'Tutorial::new', ['as' => 'admin_new_tutorial']); // TODO -> por hacer
	$routes->get('tutorial/(:any)', 'Tutorial::edit/$1', ['as' => 'admin_tutorial']); // TODO -> por hacer
	$routes->get('tutorial/(:any)/editar', 'Tutorial::get/$1', ['as' => 'admin_edit_tutorial']); // TODO -> por hacer

	// Congiguraciones
	$routes->get('configuracion/menus', 'Menu::index', ['as' => 'admin_setting_menus']); // TODO -> por hacer
	$routes->get('configuracion/menu/nuevo', 'Menu::new', ['as' => 'admin_setting_new_menu']); // TODO -> por hacer
	$routes->get('configuracion/menu/(:any)', 'Menu::edit/$1', ['as' => 'admin_setting_menu']); // TODO -> por hacer
	$routes->get('configuracion/menu/(:any)/editar', 'Menu::get/$1', ['as' => 'admin_setting_edit_menu']); // TODO -> por hacer

	$routes->get('configuracion/niveles-de-accesos', 'AuthLevel::index', ['as' => 'admin_setting_auth_levels']); // TODO -> por hacer
	$routes->get('configuracion/niveles-de-acceso/nuevo', 'AuthLevel::new', ['as' => 'admin_setting_new_auth_level']); // TODO -> por hacer
	$routes->get('configuracion/niveles-de-acceso/(:any)', 'AuthLevel::edit/$1', ['as' => 'admin_setting_auth_level']); // TODO -> por hacer
	$routes->get('configuracion/niveles-de-acceso/(:any)/editar', 'AuthLevel::get/$1', ['as' => 'admin_setting_edit_auth_level']); // TODO -> por hacer

	$routes->get('configuracion/objetos', 'TaxonomyElearning::index', ['as' => 'admin_setting_objects']); // TODO -> por hacer
	$routes->get('configuracion/objeto/nuevo', 'TaxonomyElearning::new', ['as' => 'admin_setting_new_object']); // TODO -> por hacer
	$routes->get('configuracion/objeto/(:any)', 'TaxonomyElearning::edit/$1', ['as' => 'admin_setting_object']); // TODO -> por hacer
	$routes->get('configuracion/objeto/(:any)/editar', 'TaxonomyElearning::get/$1', ['as' => 'admin_setting_edit_object']); // TODO -> por hacer

	$routes->get('configuracion/recursos', 'TaxonomyRecourse::index', ['as' => 'admin_setting_resources']); // TODO -> por hacer
	$routes->get('configuracion/recurso/nuevo', 'TaxonomyRecourse::new', ['as' => 'admin_setting_new_resource']); // TODO -> por hacer
	$routes->get('configuracion/recurso/(:any)', 'TaxonomyRecourse::edit/$1', ['as' => 'admin_setting_resource']); // TODO -> por hacer
	$routes->get('configuracion/recurso/(:any)/editar', 'TaxonomyRecourse::get/$1', ['as' => 'admin_setting_edit_resource']); // TODO -> por hacer

	$routes->get('configuracion/roles', 'Role::index', ['as' => 'admin_setting_roles']); // TODO -> por hacer
	$routes->get('configuracion/role/nuevo', 'Role::new', ['as' => 'admin_setting_new_role']); // TODO -> por hacer
	$routes->get('configuracion/role/(:any)', 'Role::edit/$1', ['as' => 'admin_setting_role']); // TODO -> por hacer
	$routes->get('configuracion/role/(:any)/editar', 'Role::get/$1', ['as' => 'admin_setting_edit_role']); // TODO -> por hacer

	$routes->get('configuracion/usuarios', 'User::index', ['as' => 'admin_setting_users']); // TODO -> por hacer
	$routes->get('configuracion/usuario/nuevo', 'User::new', ['as' => 'admin_setting_new_user']); // TODO -> por hacer
	$routes->get('configuracion/usuario/(:any)', 'User::edit/$1', ['as' => 'admin_setting_user']); // TODO -> por hacer
	$routes->get('configuracion/usuario/(:any)/editar', 'User::get/$1', ['as' => 'admin_setting_edit_user']); // TODO -> por hacer
});

$routes->group('/api/v1', ['namespace' => 'App\Controllers\API\V1'], function ($routes) {
	$routes->get('', 'Home::index'); // TODO -> por hacer
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
