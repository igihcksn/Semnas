<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//bagian frontend
$route['default_controller'] = 'welcome';


//bagian auth
$route['login'] = 'auth/login';
$route['pass'] = 'auth/pass';
$route['logout'] = 'auth/logout';

//bagian backend
$route['dashboard'] = 'backend';

$route['admin'] = 'backend/admin';
//
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
