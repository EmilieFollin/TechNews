<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 14/02/2018
 * Time: 10:09
 */

namespace application\model\article;


use Core\model\dbtable;

class articleDb extends dbtable
{

    protected $_table        = 'article';
    protected $_primary      = 'IDARTICLE';
    protected $_classToMap   = article::class;

}