<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// Crear una ruta para el form1 
// http://localhost/PDW202416/Formulario1
$routes->get('/Formulario1','CFormularios::MMostrarForm1');
// Crear una ruta para el form2
// http://localhost/PDW202416/Formulario2
$routes->get('/Formulario2','CFormularios::MMostrarForm2');
