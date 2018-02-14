<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12/02/2018
 * Time: 14:51
 */


use Core\Core;

/**
 * Nous sommes ici sur le point d'entré de notre application.
 * En MVC c'est ce que l'on appel : un FrontController
 * L'ensemble des actions ou des requete de notre site internet passera uniquement sur ce fichier
 * Il a pour mission de transferer au bon controller la demande de l'utilisateur
 *
 * Dans un framework et en MVC nous utilisons la puissance de la reecriture des URLS via la création d'un fichier .htaccess
 */

#chargement du Bootstrap
require_once 'bootstrap.php';



# require_once PATH_ROOT. '/Core/Core.php';

$core = new Core($_GET);

