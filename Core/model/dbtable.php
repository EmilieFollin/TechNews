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


    /**
     * @param string $where
     * @param string $orderby
     * @param string $limit
     * @param string $offset
     * @return objet de classToMap
     */
    public function fetchAll(
        $where   = '',
        $orderby = '',
        $limit   = '',
        $offset  = ''

    ) {
        $sql = "SELECT * FROM " . $this->_table;

        # si le selct n'est pas vide , alors je l'inclus dans ma requête

        #if ($where != '') :
        #$sql .= ' WHERE ' . $where ;
        #endif;

        !empty($where) ? $sql       .= ' WHERE '    . $where    : null ;
        !empty($orderby) ? $sql     .= ' ORDER BY ' . $orderby  : null ;
        !empty($limit) ? $sql       .= ' LIMIT '    . $limit    : null ;
        !empty($offset) ? $sql      .= ' OFFSET '   . $offset   : null ;

        #Pareil pour le reste

        $sth = $this->_db->prepare($sql);
        $sth->execute();
        return $sth->fetchAll(
            \PDO::FETCH_CLASS,
            $this->_classToMap

        );


    }

    public function fetchOne($id, $column = '') {

        empty($column) ? $column = $this->_primary : null;
        $sth = $this->_db->prepare('SELECT * FROM ' . $this->_table . ' WHERE ' . $column . ' = :search' );

        $sth->bindValue(':search', $search, \PDO::PARAM_STR);

        $sth->execute();
        $sth->setFetchMode(\PDO::FETCH_CLASS, $this->_classToMap);

        return $sth->fetch();



    }


}