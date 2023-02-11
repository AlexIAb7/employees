# Liste des employés v4

## Amélioration de l'organisation

* Ajout du routing
* Mise en place la programmation orientée objet (classe pour les contrôleurs...)

## Routing

Le routeur va permettre la résolution des liens dans l'url : il va associer une url à un contrôleur.

## Point d'entrée

Les application/sites modernes dans leur architecture mettent un place un point d'entrée unique : le fichier *index.php*. Toutes les requêtes HTTP vont passer par ce fichier là. Le fichier *index.php* initialisera tout ce dont on a besoin.

## Instructions

* Récupérer le dossier *employees-v4* depuis l'ide de la session et l'importer sur votre ide
* Utiliser l'architecture MVC et le mini-framework pour coder les fonctionnalités suivantes : liste des employés, détail d'un employé, liste des commandes, détails d'une commande

## Rappels

### Base de données

Modifier le fichier *config.php* avec vos identifiants.

### Routing

Créer des routes dans le switch qui se trouve dans le fichier *index.php* puis créer les contrôleurs correspondants (*EmployeeController* et *OrderController*).

### Modèles

Les requêtes SQL se trouvent dans des classes modèles qui seront appelées dans les contrôleurs.

### Affichage

Il faut utiliser la méthode *render* pour afficher les pages web.