<?php

namespace App\Controllers;

use Libraries\Controller;
use App\Models\CustomerModel;

class CustomerController extends Controller
{
    public function showList(): void
    {
        // Récupération de la liste des clients
        $model = new CustomerModel();
        $customers = $model->getAll();
        
        $this->render('customers.phtml', [
            'customers' => $customers
        ]);
    }
    
    public function showDetail(): void
    {
        if (! isset($_GET['id'])) {
            $this->redirect('home');
        }
    }
}