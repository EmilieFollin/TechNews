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

class Article
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
        # L'Appel au constructeur se fait de façon
        # automatique par la classe PDO !
        $categorieDb = new CategorieDb;
        $auteurDb = new AuteurDb;
        $this->AUTEUROBJ = $auteurDb->fetchOne($this->IDAUTEUR);
        $this->CATEGORIEOBJ = $categorieDb->fetchOne($this->IDCATEGORIE);
    }
    /**
     * @return mixed
     */
    public function getCATEGORIEOBJ()
    {
        return $this->CATEGORIEOBJ;
    }
    /**
     * @return mixed
     */
    public function getAUTEUROBJ()
    {
        return $this->AUTEUROBJ;
    }
    /**
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
    /**
     * Retourne l'URL complète de l'image de l'article
     */
    public function getFULLIMAGEARTICLE() {
        return PATH_PUBLIC . '/images/product/' .
            $this->FEATUREDIMAGEARTICLE;
    }

    public function getACCROCHEARTICLE(){
        #supprimer toute les balises html
        $string = strip_tags($this->CONTENUARTICLE);

        #si ma chaine de caractere est superieur a 170
        if(strlen($string) > 170) :
            $stringCut = substr($string, 0, 170);
            $string = substr($stringCut, 0, strrpos($stringCut, ' '));
        endif;
    }
}

