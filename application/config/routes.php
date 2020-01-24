<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'login_controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login']					= 'login_controller';
$route['out_session'] 			= 'login_controller/closeSessionUser';
$route['validate_account']		= 'login_controller/validateAccountUser';
$route['home']					= 'home_controller';

//RUTES WORKGROUP
$route['grupos']				= 'workgroup_controller';
$route['saveGroup']				= 'workgroup_controller/saveGroup';
$route['detailsGroup/(:any)']	= 'workgroup_controller/detailsGroup/$1';

//RUTES WORKPLAN
$route['plan-trabajo']			= 'workplan_controller';

//RUTES: FINANCES
$route['finanzas']				= 'finance_controller';

//RUTES: MEMBERSHIP
$route['membrecia']				= 'membership_controller';

//RUTES: FILES
$route['archivos']				= 'files_controller';

