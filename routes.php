<?php

// Liste des routes du site/application
return [
    'home' => [
        'App\Controllers\HomeController',
        'showHomepage'
    ],
    'customer-list' => [
        'App\Controllers\CustomerController',
        'showList'
    ],
    'customer-detail' => [
        'App\Controllers\CustomerController',
        'showDetail'
    ],
    'employees-list' => [
        'App\Controllers\EmployeeController',
        'showListEmployees'
    ]    
];