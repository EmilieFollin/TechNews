<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 14/02/2018
 * Time: 10:09
 */

namespace application\model\tags;


class tags
{
    private $IDTAGS,
            $LIBELLETAGS;

    /**
     * @return mixed
     */
    public function getIDTAGS()
    {
        return $this->IDTAGS;
    }

    /**
     * @return mixed
     */
    public function getLIBELLETAGS()
    {
        return $this->LIBELLETAGS;
    }




}