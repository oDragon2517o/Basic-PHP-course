<?php
// session_start();
//unset($_SESSION['username']);
// if ($_SESSION['username'] !== null) {
//     $index = 'index';
// } else {
//     $index = 'index';
// }

$controller = $_GET['controller'] ?? 'index';

$routes = require 'routes.php';

require_once $routes[$controller];
