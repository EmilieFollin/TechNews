<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 13/02/2018
 * Time: 15:40
 */

namespace Core\model;


class dbfactory
{
    public static function PdoFactory() {
        #creation d'une connexion PDO
        $pdo = new \PDO('mysql:host='.DBHOST.';dbname='.DBNAME,DBUSER, DBPASW);

        #Gestion des erreurs
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        #On return $PDO
        return $pdo;
    }
}