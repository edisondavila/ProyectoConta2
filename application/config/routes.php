<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'LoginController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['login'] = 'LoginController/login';
$route['volver'] = 'LoginController/volver';
$route['ingresar'] = 'LoginController/ingresar';
$route['ingresar1'] = 'LoginController/ingresar1';


$route['inicio'] = 'ContadorController';
$route['contador'] = 'ContadorController/Clientes';
$route['insert'] = 'ContadorController/insertarCliente';
$route['listar'] = 'ContadorController/listarCliente';
$route['eliminar'] = 'ContadorController/eliminarCliente';
$route['seleccionar'] = 'ContadorController/seleccionarCliente';
$route['editar'] = 'ContadorController/editarCliente';
$route['activo'] = 'ContadorController/activoCliente';
$route['trabajo'] = 'ContadorController/trabajoCliente';
$route['cuentas'] = 'ContadorController/cuentas';


$route['libroDiario'] = 'ContadorController/libroDiario';
$route['libroMayor'] = 'ContadorController/libroMayor';
$route['ConsultarLibro'] = 'ContadorController/ConsultarLibro';

$route['balanceComprobacion'] = 'ContadorController/balanceComprobacion';

$route['estadoFinanciero'] = 'ContadorController/estadoFinanciero';


$route['listarCTA'] = 'ContadorController/listarCTA';
$route['registrarCuenta'] = 'ContadorController/registrarCuenta';


$route['asientoCompras'] = 'ContadorController/asientoCompras';
$route['listarDocCompras'] = 'ContadorController/listarDocCompras';
$route['crearFormulario'] = 'ContadorController/crearFormulario';
$route['registrarAsiento'] = 'ContadorController/registrarAsiento';
$route['registrarAsiento2'] = 'ContadorController/registrarAsiento2';



$route['asientoVentas'] = 'ContadorController/asientoVentas';
$route['listarDocVentas'] = 'ContadorController/listarDocVentas';
$route['crearFormularioVenta'] = 'ContadorController/crearFormularioVenta';
$route['registrarAsientoVenta'] = 'ContadorController/registrarAsientoVenta';


$route['asientoPagos'] = 'ContadorController/asientoPagos';
$route['listarDocPagos'] = 'ContadorController/listarDocPagos';
$route['crearFormularioPago'] = 'ContadorController/crearFormularioPago';
$route['registrarAsientoPago'] = 'ContadorController/registrarAsientoPago';


$route['asientoCobros'] = 'ContadorController/asientoCobros';
$route['listarDocCobros'] = 'ContadorController/listarDocCobros';
$route['crearFormularioCobro'] = 'ContadorController/crearFormularioCobro';
$route['registrarAsientoCobro'] = 'ContadorController/registrarAsientoCobro';


$route['listarAsiento'] = 'ContadorController/listarAsiento';

$route['listarAsientoFecha'] = 'ContadorController/listarAsientoFecha';




$route['docCompras'] = 'ClienteController/docCompras';
$route['subirCompras'] = 'ClienteController/subirCompras';


$route['docVentas'] = 'ClienteController/docVentas';
$route['subirVentas'] = 'ClienteController/subirVentas';



$route['listarCliente'] = 'ClienteController/listarCliente';