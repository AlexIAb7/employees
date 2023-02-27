<?php

namespace App\Models;

use Libraries\Connection;

class EmployeeModel
{
    /**
    * Renvoie la liste de tous les employés
    * 
    * @return array
    */
    public function getAllEmployees(): array
    {
        $connection = new Connection();
        $db = $connection->getPdo();
         
        $query = $db->prepare(
            'SELECT emp.employeeNumber, emp.lastName, emp.firstName, emp.email, emp.jobTitle, off.city, man.firstName AS managerFirstName, man.lastName AS managerLastName
            FROM employees emp 
            INNER JOIN offices off ON emp.officeCode = off.officeCode 
            LEFT JOIN employees man ON emp.reportsTo = man.employeeNumber
            ORDER BY emp.firstName'
        );

        $query->execute();
        return $query->fetchAll();
         
     }
     
     
     /**
    * Renvoie la liste des détails d'un employé selon l'id
    * 
    *  
    * @return array
    */
     public function getDetailsEmployee(): array
     {
         //Connexion à la BDD
        $connection = new Connection();
        $db = $connection->getPdo();
         
        //Récupération des clients
        $query = $db->prepare(
            'SELECT emp.employeeNumber, emp.extension, emp.lastName, emp.firstName, emp.email, emp.jobTitle, off.city, man.firstName AS managerFirstName, man.lastName AS managerLastName
            FROM employees emp 
            INNER JOIN offices off ON emp.officeCode = off.officeCode 
            LEFT JOIN employees man ON emp.reportsTo = man.employeeNumber
            WHERE emp.employeeNumber= :employeeNumber'
        );

        $query->execute([
            'employeeNumber' => $_GET['id'],
        ]);
        return $query->fetch();
     }
}