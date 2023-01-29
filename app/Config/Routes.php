<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

$routes->group('dashboard', static function ($routes) {
    $routes->get('dashboard', 'Dashboard::index');
});

$routes->group('auth', static function ($routes) {
    $routes->get('login', 'Auth::login');
    $routes->get('register', 'Auth::register');
    $routes->get('logout', 'Auth::logout');
    $routes->get('forget-password', 'Auth::forget_password');
});

$routes->group('accounts', static function ($routes) {
    $routes->get('expenses', 'Accounts::expenses');
    $routes->get('invoices', 'Accounts::invoices');
    $routes->get('payments', 'Accounts::payments');
    $routes->get('taxes', 'Accounts::taxes');
});

$routes->group('activities', static function ($routes) {
    $routes->get('activities', 'Activities::index');
});

$routes->group('bookings', static function ($routes) {
    $routes->get('all', 'bookings::index');
    $routes->get('add', 'bookings::add');
    $routes->get('edit', 'bookings::edit');
});

$routes->group('calender', static function ($routes) {
    $routes->get('calender', 'Calender::index');
});

$routes->group('customers', static function ($routes) {
    $routes->get('all', 'Customers::index');
    $routes->get('add', 'Customers::add');
    $routes->get('edit', 'Customers::edit');
});

$routes->group('employees', static function ($routes) {
    $routes->get('attendance', 'Employees::attedance');
    $routes->get('holidays', 'Employees::holidays');
    $routes->get('leaves', 'Employees::leaves');
    $routes->get('list', 'Employees::list');
});

$routes->group('error-page', static function ($routes) {
    $routes->get('error-404', 'Errorpage::notFoundPage');
    $routes->get('error-505', 'Errorpage::serverError');
});

$routes->group('pricings', static function ($routes) {
    $routes->get('pricings', 'Pricings::index');
});

$routes->group('profile', static function ($routes) {
    $routes->get('profile', 'Profile::index');
});

$routes->group('reports', static function ($routes) {
    $routes->get('expenses', 'Reports::expenses');
    $routes->get('invoices', 'Reports::invoices');
});

$routes->group('rooms', static function ($routes) {
    $routes->get('all', 'Rooms::index');
    $routes->get('add', 'Rooms::add');
    $routes->get('edit', 'Rooms::edit');
});

$routes->group('staffs', static function ($routes) {
    $routes->get('all', 'Staffs::index');
    $routes->get('add', 'Staffs::add');
    $routes->get('edit', 'Staffs::edit');
});

$routes->group('settings', static function ($routes) {
    $routes->get('setting', 'Settings::index');
    $routes->get('change-password', 'Settings::changePassword');
    $routes->get('email', 'Settings::email');
    $routes->get('invoice', 'Settings::invoice');
    $routes->get('localisation', 'Settings::localisation');
    $routes->get('notification', 'Settings::notification');
    $routes->get('roles-permission', 'Settings::rolesPermission');
    $routes->get('salary', 'Settings::salary');
    $routes->get('theme', 'Settings::theme');
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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
