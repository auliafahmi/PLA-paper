<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['dashboard'] = 'pages/dashboard';
$route['dashboard/dosen'] = 'pages/dosen';
$route['login'] = 'users/login';
$route['logout'] = 'users/logout';

$route['default_controller'] = 'pages';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
