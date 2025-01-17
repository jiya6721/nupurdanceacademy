<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
// $route['Welcome'] = 'Welcome';
$route['default_controller'] = 'login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['login'] = 'login';
$route['Registration'] = 'user_panel/Registration';
$route['Home'] = 'user_panel/Home';
$route['sliders'] = 'user_panel/sliders';


$route['admin_login'] = 'admin_panel/admin_login';
$route['admin_register'] = 'admin_panel/admin_register';
$route['admin_register_add'] = 'admin_panel/admin_register/register';
$route['admin_dashboard'] = 'admin_panel/admin_dashboard';
$route['admin_gallary'] = 'admin_panel/admin_gallary';
$route['admin_add_gallary'] = 'admin_panel/admin_gallary/add';
$route['admin_sliders'] = 'admin_panel/admin_sliders';
$route['admin_add_slider'] = 'admin_panel/admin_sliders/add';
$route['admin_course'] = 'admin_panel/admin_course';
$route['admin_add_course'] = 'admin_panel/admin_course/add';
$route['admin_alumni'] = 'admin_panel/admin_alumni';
$route['admin_add_alumni'] = 'admin_panel/admin_alumni/add';



