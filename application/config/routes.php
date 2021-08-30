<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "welcome";
$route['404_override'] = '';

//** LOGIN ROUTES **//
$route['login-user']            = 'api/login_user_account';
$route['add-new-user']          = 'api/add_new_user';
$route['update-user']           = 'api/update_user_data';
$route['remove-user']           = 'api/remove_user_data';
$route['add-new-data']          = 'api/add_new_covid_data';
$route['add-new-tracing-data']  = 'api/add_new_tracing_data';

//** ADMIN ROUTES **/
$route['add-new-data-admin']  		  = 'api/add_new_covid_data_admin';
$route['add-new-tracing-data-admin']  = 'api/add_new_tracing_data_admin';
$route['remove-data']  				  = 'api/remove_data';
$route['remove-tracing']  			  = 'api/remove_tracing';


//$route['translate_uri_dashes'] = FALSE;

/* End of file routes.php */
/* Location: ./application/config/routes.php */