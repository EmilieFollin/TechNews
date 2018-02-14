<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 14/02/2018
 * Time: 10:09
 */

namespace application\model\tags;


use Core\model\dbtable;

class tagsDb extends dbtable
{

    protected $_table        = 'tags';
    protected $_primary      ='IDTAGS';
    protected $_classToMap   = tags::class;
}