<?php

namespace App\Models;

use Libraries\Connection;

class CustomerModel
{
    /**
     * Renvoie la liste de tous les clients
     * 
     * @return array
     */
    public function getAll(): array
    {
        // Connexion à la base de données
        $connection = new Connection();
        $db = $connection->getPdo();
        
        // Récupération des clients
        $query = $db->prepare(
            'SELECT customerNumber, customerName, phone, addressLine1, city, country, postalCode
            FROM customers
            ORDER BY customerName'
        );
        
        $query->execute();
        
        return $query->fetchAll();
    }
}