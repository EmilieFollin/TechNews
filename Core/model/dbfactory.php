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

    /**
     * Crée une instance de Idiorm ORM
     */

    public static function IdiormFactory() {

        #Initialisation de Idiorm
        ORM::configure('mysql:host='.DBHOST.';dbname='.DBNAME);
        ORM::configure('username', DBUSER);
        ORM::configure('password', DBPASW);

        /**
         * configuration de la clé primaire de chaque table
         * cette configuration n'est nécéssaire que si les clé primaries sont differentes de 'ID'
         * https://idiorm.readthedocs.io/en/latest/configuration.html#setup         *
         */

        ORM::configure('id_column_overrides', array(
            'article' => 'IDARTICLE',
            'view_articles' => 'IDARTICLE',
        ));

    }
}