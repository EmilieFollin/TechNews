<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 13/02/2018
 * Time: 15:53
 */

namespace Core\model;


abstract class dbtable
{

    # Nom de la table
    protected $_table;

    #clé primaire
    protected $_primary;

    # classe a Mapper
    protected $_classToMap;

    # instance PDO, objet PDO, BDD
    private $_db;

    public function __construct()
    {
        #je recupere l'instance de PDO
        $this->_db = dbfactory::PdoFactory();
    }

    public function fetchAll() {
        $sql = "SELECT * FROM " . $this->_table;
        $sth = $this->_db->prepare($sql);
        $sth->execute();
        return $sth->fetchAll(
            \PDO::FETCH_CLASS,
            $this->_classToMap

    );
    }

}