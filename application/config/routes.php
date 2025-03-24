<?php
defined('BASEPATH') or exit('No direct script access allowed');


$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// ---------Company Dashboard ---------
$route['login'] = 'Home/login';
$route['register'] = 'Home/register';
$route['notification'] = 'Home/notification';
$route['wallet'] = 'Home/wallet';
$route['profile_update'] = 'Home/profile_update';
$route['posted_task'] = 'Home/posted_task';
$route['view_posted'] = 'Home/view_posted';
$route['role_employment'] = 'Home/role_employment';
$route['active_bids'] = 'Home/active_bids';
$route['manage_tasks'] = 'Home/manage_tasks';
$route['manage_bidders'] = 'Home/manage_bidders';
$route['post_task'] = 'Home/post_task';
$route['manage-tasks'] = 'Home/manage_tasks';
$route['manage-bidders'] = 'Home/manage_bidders';
$route['active-bids'] = 'Home/active_bids';
$route['post-task'] = 'Home/post_task';

// -------------Freelancer Dashboard -----------
$route['registration'] = 'Freelancer/registration';
$route['applied_task'] = 'Freelancer/applied_task';
$route['dashboard'] = 'Freelancer/dashboard';
