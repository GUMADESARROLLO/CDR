<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'login_controller';
$route['404_override'] = 'login_controller';
$route['translate_uri_dashes'] = FALSE;

//MIS RUTAS

//RUTA: LOGIN
$route['acreditando'] = 'login_controller/validandoCuenta';

//RUTA: MAIN
$route['main'] = 'main_controller';

//RUTA: MOVIMIENTOS
$route['movimientos'] = 'movimientos_controller';

//RUTA: TALONARIOS
$route['talonarios'] = 'talonarios_controller';

//RUTA: REPORTES
$route['reportes'] = 'reportes_controller';
$route['TipoRpt/(:any)'] =  'reportes_controller/generandoMenuTipoRpt/$1';
$route['reporteData/(:any)'] =  'reportes_controller/generarReporte/$1';

