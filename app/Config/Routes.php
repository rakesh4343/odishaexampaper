<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('PaperController');
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

// $routes->get('/', 'Pages::view');


//Admin Routes=============================================================
$routes->group('dashboard', function ($routes) {
    $routes->match(['get','post'],'manageadmins', 'AdminController::manageadmins');
    $routes->match(['get','post'],'manageusers', 'AdminController::manageusers');
    $routes->match(['get','post'],'createquiz', 'AdminController::createQuiz');
    $routes->match(['get','post'],'createquiz', 'AdminController::createTheory');
    $routes->match(['get','post'],'createquiz', 'AdminController::createCategories');
    $routes->match(['get','post'],'createquiz', 'AdminController::manageUsers');
    $routes->get('analytics','AnalyticsController::index');

});
//Forms to create theory and quiz posts ==================================
$routes->group('forms', function ($routes) {
    $routes->match(['get','post'],'creategk', 'PostController::creategk');
    $routes->match(['get','post'],'createpaper', 'PostController::createpaper');
    $routes->match(['get','post'],'categories', 'PostController::categories');
 
});

// payment
$routes->get('payments', 'PaymentController::index');

$routes->match(['get','post'],'login', 'AdminController::index');
$routes->get('dashboard', 'AdminController::adminarea');

$routes->get('forms', 'AdminController::forms');

// -------------admin routes ends here --------------
$routes->get('/paper/(:segment)', 'PaperController::view/$1');

//File Contoller routes
$routes->match(['get','post'],'upload', 'fileController::index');



// ----------------------------------------
$routes->get('/', 'PaperController::index');
$routes->get('(:any)', 'Pages::view/$1');
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
