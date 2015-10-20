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

$route['default_controller'] = 'newhome';

$route['scaffolding_trigger'] = "";

$route['logout'] = "login/logout";
$route['home'] = "newhome";

$route['(news|offer|offers|announcement)/:num'] = 'entries/details/$1';

$route['organization/:num'] = 'organization/view/$1';
$route['status/:num'] = 'status_update/view/$1';

$route['concepts/(:any)'] = 'concepts/view/$1';
$route['groups/ajax_load_all_group'] = 'groups/ajax_load_all_group';
$route['groups/(:any)'] = 'groups/view/$1';

$route['photos/(:any)'] = 'about/photos/$1';
$route['photos'] = 'about/photos';


$route['(news|offers|announcement)'] = "newhome/$1";
$route['release_notes'] = "newhome/release_notes";
$route['code_of_conduct'] = "newhome/code_of_conduct";
$route['help'] = "newhome/help";
$route['faq'] = "newhome/faq";


$route['404_override'] = 'locator/lookup';


/* End of file routes.php */
/* Location: ./application/config/routes.php */