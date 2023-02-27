<?php

namespace App\Controllers;

use Libraries\Controller;
use App\Models\EmployeeModel;

class EmployeeController extends Controller
{
    public function showListEmployees(): void
    {
        $model = new EmployeeModel();
        $employees = $model->getAllEmployees();
        
        $this->render('employee.phtml', [
            'employees' => $employees
        ]);
    }
    
    
    
    public function showDetailEmployee():void
    {
        $model = new EmployeeModel();
        $employee = $model->getDetailsEmployee();
        
        if ($employee === false) {
            // Affichage d'une page 404
            showView('404.phtml');
            http_response_code(404);
            exit();
        }
        $this->render('detail_employee.phtml', [
            'employee' => $employee
        ]);  
    }
}