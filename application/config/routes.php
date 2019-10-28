<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'ControllerAuth';
$route['dashboard'] = 'ControllerDashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Route Menu
$route['auth/otp/(:any)'] = 'ControllerAuth/otp';
$route['auth/otp/verifikasi/(:any)'] = 'ControllerAuth/verifikasiotp';
$route['auth/login'] = 'ControllerAuth/login';
$route['auth/logout'] = 'ControllerAuth/logout';

$route['dashboard'] = 'ControllerDashboard';

$route['admin'] = 'ControllerAdmin';
$route['admin/hapus/(:any)'] = 'ControllerAdmin/hapus';
$route['admin/ubah'] = 'ControllerAdmin/ubah';

$route['menu/title'] = 'ControllerTitleMenu';
$route['menu/title/tambah'] = 'ControllerTitleMenu/tambah';
$route['menu/title/hapus/(:any)'] = 'ControllerTitleMenu/hapus';
$route['menu/title/ubah'] = 'ControllerTitleMenu/ubah';

$route['menu/submenu'] = 'ControllerSubMenu';
$route['menu/submenu/hapus/(:any)'] = 'ControllerSubMenu/hapus';
$route['menu/submenu/ubah/(:any)'] = 'ControllerSubMenu/ubah';

$route['menu/aktor'] = 'ControllerAksesMenu';
$route['menu/aktor/tambah'] = 'ControllerAksesMenu/tambahaktor';
$route['menu/aktor/ubah'] = 'ControllerAksesMenu/ubahaktor';
$route['menu/aktor/hapus/(:any)'] = 'ControllerAksesMenu/hapusaktor';

$route['menu/akses/data/(:any)'] = 'ControllerAksesMenu/dataakses';
$route['menu/akses/ubah'] = 'ControllerAksesMenu/ubahakses';

$route['jurusan'] = 'ControllerJurusan';
$route['jurusan/ubah'] = 'ControllerJurusan/ubah';
$route['jurusan/hapus/(:any)'] = 'ControllerJurusan/hapus';

$route['dosen/pembimbing'] = 'ControllerDosen';
$route['dosen/pembimbing/tambah'] = 'ControllerDosen/tambah';
$route['dosen/pembimbing/ubah'] = 'ControllerDosen/ubah';
$route['dosen/pembimbing/hapus/(:any)'] = 'ControllerDosen/hapus';
