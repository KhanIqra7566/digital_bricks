<?php
defined('BASEPATH') or exit('No direct script access allowed');


$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['login'] = 'Home/login';
$route['register'] = 'Home/register';
$route['notification'] = 'Home/notification';
$route['wallet'] = 'Home/wallet';
$route['profile_update'] = 'Home/profile_update';
$route['posted_task'] = 'Home/posted_task';
$route['view_posted'] = 'Home/view_posted';
$route['role_employment'] = 'Home/role_employment';