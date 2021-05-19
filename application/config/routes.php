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
$route['admin_gudang/stok_barang.html']             = 'adminGudang/Barang';
$route['admin_gudang/stok_barang/tambah.html']      = 'adminGudang/Barang/tambah';
$route['admin_gudang/stok_barang/edit/(:any)']      = 'adminGudang/Barang/edit/$1';
$route['admin_gudang/stok_barang/hapus/(:any)']     = 'adminGudang/Barang/hapus/$1';
$route['admin_gudang/barang_masuk.html']            = 'adminGudang/BarangMasuk';
$route['admin_gudang/barang_masuk/tambah.html']     = 'adminGudang/BarangMasuk/tambah';
$route['admin_gudang/barang_masuk/edit/(:any)']     = 'adminGudang/BarangMasuk/edit/$1';
$route['admin_gudang/barang_masuk/hapus/(:any)']    = 'adminGudang/BarangMasuk/hapus/$1';
$route['admin_gudang/barang_keluar.html']           = 'adminGudang/BarangKeluar';
$route['admin_gudang/barang_keluar/tambah.html']    = 'adminGudang/BarangKeluar/tambah';
$route['admin_gudang/barang_keluar/edit/(:any)']    = 'adminGudang/BarangKeluar/edit/$1';
$route['admin_gudang/barang_keluar/hapus/(:any)']   = 'adminGudang/BarangKeluar/hapus/$1';