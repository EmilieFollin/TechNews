<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 14/02/2018
 * Time: 10:37
 */

namespace application\model\auteur;


use Core\model\dbtable;

class auteurDb extends dbtable
{
    protected $_table        = 'auteur';
    protected $_primary      ='IDAUTEUR';
    protected $_classToMap   = auteur::class;

}