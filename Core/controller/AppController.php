<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 13/02/2018
 * Time: 12:33
 */

namespace Core\controller;


use Core\model\Helper;

class AppController
{
    use Helper;

    private $_viewsparams;

    /**
     * Permet de generer l'affichage de la vue passé en paramètre
     * @param $view vue a afficher
     * @param array $viewparams : donnée a passé en vue
     */

    protected function render ($view, Array $viewparams = []) {

        #Recuperation et affectation des parametre de la vue
        $this->_viewsparams = $viewparams;

        #Permet d'acceder au tableau directement dans des variables
        extract($this->_viewsparams);

        #chargement du HEADER
        include_once PATH_HEADER;

        #chargement de ma vue
        include_once PATH_VIEWS . '/' . $view . '.php';

        #chargement du FOOTER
        include_once PATH_FOOTER;

    }

    protected function renderJson(array $param) {
        header('Content-Type: application/json');
        echo json_encpde($param);

    }


    /**
     * renvoi le tableau de paramètre de la vue
     * @return \arrayObject
     */
    public function getViewsparams()
    {
        # http://php.net/manual/fr/class.arrayobject.php
        # Je vais pouvoir acceder a mon tableau comme un object
        $object = new \ArrayObject($this->_viewsparams);
        $object->setFlags(\ArrayObject::ARRAY_AS_PROPS);
        return $object;

        # return $this->_viewsparams
    }

    /**
     * permet de debugguer les paramètres de la vue ou le parametre passé a la fonction.
     * @param array $params
     */

    public function debug($params = [] ) {
        if(empty($params)) :
            $params = $this ->_viewsparams;
        endif;

        echo '<pre>';
            print_r($params);
        echo' </pre>';
    }

    /**
     * verifie l'existance de valeur dans $_get
     */
    public function getAction() {
        empty($_GET['action']) ? 'accueil' : $_GET['action'];
    }



}