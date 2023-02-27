<?php

namespace Libraries;

class Controller
{
    public function render(string $viewName, array $data = []): void
    {
        // Crée des variables à partir du tableau $data
        extract($data);
        
        $template = $viewName;
        require 'App/Views/layout.phtml';
    }
    
    public function redirect(string $page): void
    {
        header("Location: ?page=$page");
        exit();
    }
}