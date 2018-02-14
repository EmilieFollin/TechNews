<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 13/02/2018
 * Time: 16:32
 */

namespace application\model\categorie;


use Core\model\dbtable;

class categorieDb extends dbtable
{
    protected $_table        = 'categorie';
    protected $_primary      ='IDCATEGORIE';
    protected $_classToMap   = categorie::class;
}