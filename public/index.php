<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\AdminController;
use Controllers\APIController;
use Controllers\LoginController;
use Controllers\CitasController;
use Controllers\ServiciosController;
use MVC\Router;

$router = new Router();

//Iniciar Sesion
$router->get('/',[LoginController::class, 'login']);
$router->post('/',[LoginController::class, 'login']);

$router->get('/logout',[LoginController::class, 'logout']);

//Recuperar Contraseña
$router->get('/olvide',[LoginController::class, 'olvide']);
$router->post('/olvide',[LoginController::class, 'olvide']);
$router->get('/recuperar',[LoginController::class, 'recuperar']);
$router->post('/recuperar',[LoginController::class, 'recuperar']);

//Registrar Cuenta
$router->get('/crear-cuenta',[LoginController::class, 'crear']);
$router->post('/crear-cuenta',[LoginController::class, 'crear']);

//Confirmar Cuenta
$router->get('/confirmar-cuenta',[LoginController::class, 'confirmar']);
$router->get('/mensaje',[LoginController::class, 'mensaje']);

//Citas
$router->get('/citas',[CitasController::class, 'index']);

//Servicios
$router->get('/servicios',[ServiciosController::class, 'index']);
$router->post('/servicios',[ServiciosController::class, 'index']);
$router->get('/servicios/crear',[ServiciosController::class, 'crear']);
$router->post('/servicios/crear',[ServiciosController::class, 'crear']);
$router->get('/servicios/actualizar',[ServiciosController::class, 'actualizar']);
$router->post('/servicios/actualizar',[ServiciosController::class, 'actualizar']);
$router->post('/servicios/eliminar',[ServiciosController::class, 'eliminar']);


//Admin
$router->get('/admin',[AdminController::class, 'index']);

//API
$router->get('/api/servicios',[APIController::class, 'index']);
$router->post('/api/citas',[APIController::class, 'guardarCita']);
$router->post('/api/eliminar',[APIController::class, 'eliminarCita']);


// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();
