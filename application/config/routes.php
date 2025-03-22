<?php
defined('BASEPATH') or exit('No direct script access allowed');


$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['manage-tasks'] = 'Home/manage_tasks';
$route['manage-bidders'] = 'Home/manage_bidders';
$route['active-bids'] = 'Home/active_bids';
$route['post-task'] = 'Home/post_task';
