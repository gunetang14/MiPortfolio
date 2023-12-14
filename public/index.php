<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\PaginasController;
use MVC\Router;

$router = new Router();

$router->get('/', [PaginasController::class, 'about']);
$router->get('/portfolio', [PaginasController::class, 'portfolio']);
$router->get('/skills', [PaginasController::class, 'skills']);
$router->get('/form', [PaginasController::class, 'form']);
$router->post('/form', [PaginasController::class, 'form']);
$router->get('/thanks', [PaginasController::class, 'thanks']);
$router->get('/404', [PaginasController::class, 'error']);


// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();