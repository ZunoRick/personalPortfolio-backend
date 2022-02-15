<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\APIController;
use MVC\Router;

$router = new Router();

//index
$router->get('/', [APIController::class, 'index']);
$router->get('/proyectos', [APIController::class, 'proyectos']);
$router->post('/email', [APIController::class, 'sendEmail']);

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();