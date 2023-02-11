<?php

// Point d'entrée du site/application => initialisation du framework

// Autoloader
spl_autoload_register(function ($className) {
    $fileName = str_replace("\\", '/', $className);
    require "$fileName.php";
});

// Mise en place du routeur

// Récupérer la route (une partie de l'url)

// Si la page a été spécifiée dans l'url on la récupère
if (isset($_GET['page'])) {
    $route = $_GET['page'];
} else {
    // Sinon on en donne une par défaut (accueil)
    $route = 'home';
}

// Raccourci de la condition ci-dessus (opérateur de coalescence null) :
$page = $_GET['page'] ?? 'home';

// Version avancée du routeur :
// $routes = require 'routes.php';

// $route = $routes[$page];
// $controllerName = $route[0];
// $method = $route[1];

// // Instanciation dynamique du contrôleur
// $controller = new $controllerName();

// // Appel de la méthode dynamiquement
// $controller->$method();

// Liste des routes de mon site/application
switch ($page) {
    case 'home':
        $controller = new App\Controllers\HomeController();
        $controller->showHomepage();
        break;
    case 'customer-list':
        $controller = new App\Controllers\CustomerController();
        $controller->showList();
        break;
    case 'customer-detail':
        $controller = new App\Controllers\CustomerController();
        $controller->showDetail();
        break;
    case 'employees-list':
        $controller = new App\Controllers\EmployeeController();
        $controller->showListEmployees();
        break;
    case 'employee-detail':
        $controller = new App\Controllers\EmployeeController();
        $controller->showDetailEmployee();
        break;
    // case 'orders-list':
    //     $controller = new App\Controllers\OrdersController();
    //     $controller->showList();
    //     break;
    // case 'order-detail':
    //     $controller = new App\Controllers\OrdersController();
    //     $controller->showDetail();
    //     break;
    default:
        // Afficher page 404
        echo 'NOT FOUND';
}