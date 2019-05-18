<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*

*/
$route['create'] = 'spk/create';
$route['data'] = 'spk/data';

$route['data/update/(:any)'] = 'spk/update/$1';
$route['data/delete/(:any)'] = 'spk/delete/$1';

$route['default_controller'] = 'spk';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
