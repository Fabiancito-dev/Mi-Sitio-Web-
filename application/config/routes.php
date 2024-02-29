<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Home/index';
$route['index'] = 'Home/index';
$route['index/all'] = 'Home/all';
$route['admin-registry'] = 'Admin/admin_registry';
$route['admin-registry/admin-reg-save'] = 'Admin/admin_reg_save';
$route['admin-login'] = 'Admin/admin_login';
$route['admin-login/admin-log-verify'] = 'Admin/admin_log_verify';
$route['dashboard'] = 'AdminDash/admin_log_session';
$route['dashboard-logout'] = 'Admin/admin_logout';
$route['dashboard/list-products'] = 'AdminDash/list_products';
$route['dashboard/list-products-save'] = 'AdminDash/list_products_save';
$route['dashboard/list-products-edit'] = 'AdminDash/list_products_edit';
$route['dashboard/list-products-delete'] = 'AdminDash/list_products_delete';
$route['dashboard/list-users'] = 'AdminDash/list_users';
$route['dashboard/list-users-save'] = 'AdminDash/list_users_save';
$route['dashboard/list-users-edit'] = 'AdminDash/list_users_edit';
$route['dashboard/list-users-delete'] = 'AdminDash/list_users_delete';
/*$route['dashboard/list-transactions'] = 'AdminDash/list_transactions';*/
$route['user-registry'] = 'User/user_registry';
$route['user-login/user-find'] = 'User/user_find';
$route['user-registry/user-reg-save'] = 'User/user_reg_save';
$route['user-login'] = 'User/user_login';
$route['user-login/user-log-verify'] = 'User/user_log_verify';
$route['user-login/user-log-session'] = 'UserSec/user_log_session';
$route['user-login/user-logout'] = 'User/user_logout';
$route['user/add-adress'] = 'User/add_adress';
$route['user/add-payment'] = 'User/add_payment';
$route['user/add-cart'] = 'User/add_cart';
$route['cart'] = 'User/cart';
$route['cart/cart-delete'] = 'User/cart_delete';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
/*$route['prueba'] = 'Pruebas/prueba';*/