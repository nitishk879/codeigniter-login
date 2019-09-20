<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller']        = 'auth';

$route['contact']                   = 'welcome/contact';
$route['admin']                     = 'auth';
$route['login']                     = 'auth/login';
$route['logout']                    = 'auth/logout';
$route['register']                  = 'auth/create_user';
$route['new-task']                  = 'welcome/upload_new_task';
$route['view-file-detail/(:any)']   = 'welcome/view_file_detail/$1';

$route['remove-user/(:any)']        = 'auth/deactivate/$1';
$route['add-user']                  = 'auth/create_user';
$route['update-user/(:any)']        = 'auth/edit_user/$1';
$route['add-group']                 = 'auth/create_group';
$route['edit-group/(:any)']         = 'auth/edit_group/$1';

$route['auth/users']                = 'users/get_users';
$route['auth/user/(:any)']          = 'users/get_user_activities/$1';
$route['auth/file-detail/(:any)']   = 'users/get_file_details/$1';
$route['auth/remark-file']          = 'users/add_remark';
$route['auth/remark']               = 'users/remark_file';
$route['auth/task-list']            = 'users/files_priority/';

$route['404_override']              = '';
$route['translate_uri_dashes']      = FALSE;

