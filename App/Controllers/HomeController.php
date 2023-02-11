<?php

namespace App\Controllers;

use Libraries\Controller;

class HomeController extends Controller
{
    public function showHomepage(): void
    {
        $this->render('index.phtml', [
            'content' => 'Description du projet'    
        ]);
    }
}