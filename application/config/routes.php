<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller']    = 'login';
$route['404_override']          = '';
$route['translate_uri_dashes']  = FALSE;

$route['login.html']  = 'login';
$route['logout.html'] = 'logout';

$route['admin_gudang.html']                         = 'adminGudang/adminGudang';
$route['admin_gudang/manajemen_user.html']          = 'adminGudang/User';
$route['admin_gudang/manajemen_user/(:any)']        = 'adminGudang/User/edit/$1';
$route['admin_gudang/manajemen_user/hapus/(:any)']  = 'adminGudang/User/hapus/$1';