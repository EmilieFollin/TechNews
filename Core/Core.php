<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12/02/2018
 * Time: 15:05
 */
namespace Core;



use Core\controller\AppController;

class Core extends AppController
{
    public function __construct($params)
    {
        # print_r($params);

        # Valeur par defaut
         if (empty($params)) :
            $params['controller']   = 'news';
            $params['action']       = 'index';

         endif;

        # Recupération des paramètres
         $controller = 'application\controller\\'.ucfirst($params['controller']).'Controller';
         $action     = $params['action'];

         $action = $params['action'].'Action';




         # on verifie si le fichier existe avant de l'instancier

         if (file_exists(PATH_ROOT. '\\' . $controller . '.php')) :

         $obj = new $controller;

         if(method_exists($obj, $action)) :
         $obj->$action();

         else :
             $this->render('error/404', [
                 'message' => 'Cette action n\'existe pas'
             ]);
         endif;

         else :
             $this->render('error/404', [
                 'message' => 'Ce controleur n\'existe pas'
             ]);
         endif;



        # if($controller == 'news' && $action == 'index'){
          #  echo '<h1> JE SUIS SUR LA PAGE ACCUEIL </h1>';
        #}

        #if($controller == 'news' && $action == 'categorie'){
         #   echo '<h1> JE SUIS SUR LA PAGE CATEGORIE </h1>';
        #

        #if($controller == 'news' && $action == 'article'){
         #   echo '<h1> JE SUIS SUR LA PAGE ARTICLE </h1>';
        #}

        #if($controller == 'menbre' && $action == 'inscritpion'){
         #   echo '<h1> JE SUIS SUR LA PAGE INSCRIPTION </h1>';
        #}
    }

    /**
     * Permet de générer l'affichage
     * de la vue passé en paramètre.
     * @param $view Vue à afficher.
     * @param array $viewparam Données à passer à la vue.
     */
    protected function render($view, Array $viewparams = []) {

        # Récupération et Affectation des Paramètres de la Vue
        $this->_viewparams = $viewparams;

        # Permet d'accéder au tableau directement dans des variables
        extract($this->_viewparams);

        # Chargement de la Vue
        $view = PATH_VIEWS . '/' . $view . '.php';
        if( file_exists($view) ) :

            # Chargement du Header
            include_once PATH_HEADER;

            # Chargement de la Vue
            include_once $view;

            # Chargement du Footer
            include_once PATH_FOOTER;

        else :

            $this->render('errors/404', [
                'message' => 'Aucune vue correspondante'
            ]);

        endif;

    }
}