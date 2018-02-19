<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//bagian frontend
$route['default_controller'] = 'welcome';


//bagian auth
$route['login'] = 'auth';

//bagian backend

//
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
