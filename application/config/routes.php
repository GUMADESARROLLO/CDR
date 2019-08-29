<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'login_controller';
$route['404_override'] = 'login_controller';
$route['translate_uri_dashes'] = FALSE;

//RUTA: LOGIN
$route['acreditando'] = 'login_controller/validandoCuenta';
$route['salir'] = 'login_controller/salir';

//RUTA: USUARIOS
$route['actualizarUsuario'] = 'usuarios_controller/actualizarUsuario';

//RUTA: MAIN
$route['main'] = 'main_controller';

//RUTA: MOVIMIENTOS
$route['movimientos'] = 'movimientos_controller';
$route['listarMovimientos'] = 'movimientos_controller/listandoMovimientos';
$route['crear'] = 'movimientos_controller/crearMovimiento';
$route['agregarArtDatatable'] = 'movimientos_controller/listarArticulos';

//RUTA: TALONARIOS
$route['talonarios'] = 'talonarios_controller';

//RUTA: REPORTES
$route['reportes'] = 'reportes_controller';
$route['TipoRpt/(:any)'] =  'reportes_controller/generandoMenuTipoRpt/$1';
$route['reporteData/(:any)/(:any)/(:any)/(:any)'] =  'reportes_controller/generarReporte/$1/$2/$3/$4';

$route['Reporte_Excel/(:any)/(:any)/(:any)/(:any)'] =  'reportes_controller/toExcel/$1/$2/$3/$4';
$route['Reporte_AVG/(:any)/(:any)/(:any)'] =  'reportes_controller/toAvg/$1/$2/$3';