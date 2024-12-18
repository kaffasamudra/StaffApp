<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'Login/index';
$route['adminlogin'] = 'login/login';
$route['admin'] = 'admin/Dashboard';

$route['loginuser'] = 'auth/index';
$route['userlogin'] = 'auth/login';

$route['listtodolist'] = 'admin/Todolist/index';
$route['showtodolist/(.+)'] = 'admin/Todolist/show/$1';
$route['todolist'] = 'user/post_todolist';

$route['bagianview'] = 'user/kepala_bagian/index';
$route['bagianshow/(.+)'] = 'user/kepala_bagian/show/$1';

$route['direksiview'] = 'user/direksi/index';
$route['direksishow/(.+)'] = 'user/direksi/show/$1';

$route['editform/(.+)'] = 'user/Post_todolist/edit/$1';
$route['newform'] = 'user/Post_todolist/new';
$route['viewtodolist/(.+)'] = 'user/Post_todolist/show/$1';

$route['contact'] = 'user/kontak/contact';
$route['task'] = 'tasks/index';
$route['setting'] = 'user/setting/index';

$route['forgotpassword'] = 'auth/forgotpassword';
$route['forgot_password'] = 'Auth/forgot_password';
$route['enter_token'] = 'auth/enter_token';

$route['verify_token'] = 'auth/verify_token';
$route['reset_password'] = 'auth/reset_password';
$route['update_password'] = 'auth/update_password';

$route['staffapp'] = 'user/dashboard/index';
$route['tiket'] = 'admin/tiket/index';
$route['editiket/(.+)'] = 'admin/tiket/edit/$1'; 

$route['tiketing/save'] = 'user/tiketing/save'; 
$route['tiket/update/(.+)'] = 'admin/tiket/update/$1';
$route['tiketing'] = 'user/tiketing/index';

$route['tiketing/add'] = 'user/tiketing/add';
$route['contoh'] = 'example';
$route['image'] = 'image/index';

$route['image/upload'] = 'image/upload';
$route['image/save'] = 'image/save';
$route['image/delete/(.+)'] = 'image/delete/$1';

$route['image/edit/(.+)'] = 'image/edit/$1';
$route['image/update/(.+)'] = 'image/update/$1';
$route['kontak'] = 'Dashboard/contact';