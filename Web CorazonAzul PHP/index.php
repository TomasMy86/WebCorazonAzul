<?php
// index.php

// Obtener la ruta desde la URL
$route = isset($_GET['route']) ? $_GET['route'] : '/';

// Incluir el archivo de plantilla correspondiente según la ruta
switch ($route) {
    case '/':
        include 'templates/page.php';
        break;
    // Agrega más rutas según sea necesario
    default:
        include 'templates/404.php';
        break;
}
?>
