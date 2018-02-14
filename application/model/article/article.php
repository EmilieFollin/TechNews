<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 14/02/2018
 * Time: 10:08
 */

namespace application\model\article;


use application\model\auteur\auteurDb;
use application\model\categorie\categorieDb;

class article
{
    private $IDARTICLE,
            $IDAUTEUR,
            $IDCATEGORIE,
            $TITREARTICLE,
            $CONTENUARTICLE,
            $FEATUREDIMAGEARTICLE,
            $SPECIALARTICLE,
            $SPOTLIGHTARTICLE,
            $DATECREATIONARTICLE,
            $CATEGORIEOBJ,
            $AUTEUROBJ;


    public function __construct()
    {
        #l'appel au constructeur se fait de facon automatique par la classe PDO

        $categorieDb = new categorieDb();
        $auteurDb = new auteurDb();

        $this->AUTEUROBJ = $auteurDb->fetchOne($this->IDAUTEUR);
        $this->CATEGORIEOBJ = $categorieDb->fetchOne($this->IDCATEGORIE);



    }

    /**
     * GETTERS
     * @return mixed
     */
    public function getIDARTICLE()
    {
        return $this->IDARTICLE;
    }

    /**
     * @return mixed
     */
    public function getIDAUTEUR()
    {
        return $this->IDAUTEUR;
    }

    /**
     * @return mixed
     */
    public function getIDCATEGORIE()
    {
        return $this->IDCATEGORIE;
    }

    /**
     * @return mixed
     */
    public function getTITREARTICLE()
    {
        return $this->TITREARTICLE;
    }

    /**
     * @return mixed
     */
    public function getCONTENUARTICLE()
    {
        return $this->CONTENUARTICLE;
    }

    /**
     * @return mixed
     */
    public function getFEATUREDIMAGEARTICLE()
    {
        return $this->FEATUREDIMAGEARTICLE;
    }

    /**
     * @return mixed
     */
    public function getSPECIALARTICLE()
    {
        return $this->SPECIALARTICLE;
    }

    /**
     * @return mixed
     */
    public function getSPOTLIGHTARTICLE()
    {
        return $this->SPOTLIGHTARTICLE;
    }

    /**
     * @return mixed
     */
    public function getDATECREATIONARTICLE()
    {
        return $this->DATECREATIONARTICLE;
    }


    public function getFULLIMAGEARTICLE() {
        return PATH_PUBLIC . '/images/product/' . $this->FEATUREDIMAGEARTICLE;
    }

}



